<?php

/**
 * sfMelodyToken form base class.
 *
 * @method sfMelodyToken getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BasesfMelodyTokenForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'name'           => new sfWidgetFormInputText(),
      'token_key'      => new sfWidgetFormInputText(),
      'token_secret'   => new sfWidgetFormInputText(),
      'user_id'        => new sfWidgetFormInputHidden(),
      'expire'         => new sfWidgetFormInputText(),
      'params'         => new sfWidgetFormInputText(),
      'identifier'     => new sfWidgetFormInputText(),
      'status'         => new sfWidgetFormInputText(),
      'o_auth_version' => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'name'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'token_key'      => new sfValidatorString(array('required' => false)),
      'token_secret'   => new sfValidatorString(array('required' => false)),
      'user_id'        => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id', 'required' => false)),
      'expire'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'params'         => new sfValidatorString(array('required' => false)),
      'identifier'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'status'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'o_auth_version' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'created_at'     => new sfValidatorDateTime(array('required' => false)),
      'updated_at'     => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorPropelUnique(array('model' => 'sfMelodyToken', 'column' => array('token_key'))),
        new sfValidatorPropelUnique(array('model' => 'sfMelodyToken', 'column' => array('name', 'user_id'))),
        new sfValidatorPropelUnique(array('model' => 'sfMelodyToken', 'column' => array('name', 'identifier'))),
      ))
    );

    $this->widgetSchema->setNameFormat('sf_melody_token[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfMelodyToken';
  }


}
