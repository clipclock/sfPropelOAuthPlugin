<?php
/**
 *
 *
 *
 * TokenPeer Class
 *
 * @author Maxime Picaud
 * @since 26 août 2010
 */
class TokenPeer extends BaseTokenPeer
{
  protected static function getByNameAndUserCriteria($name, $user, $status = null)
  {
    $c = new Criteria();

    if(!is_null($name))
    {
      $c->add(TokenPeer::NAME, $name);
    }


    if($user instanceof sfGuardUser)
    {
      $c->add(TokenPeer::USER_ID, $user->getId());
    }
    else
    {
      $c->add(TokenPeer::USER_ID, null, Criteria::ISNULL);
    }

    if(!is_null($status))
    {
      $c->add(TokenPeer::STATUS, $status);
    }

    return $c;
  }

  public static function findOneByNameAndUser($name, $user, $status = null)
  {
    $c = self::getByNameAndUserCriteria($name, $user, $status);

    return self::doSelectOne($c);
  }

  public static function findByNameAndUser($name, $user, $status = null)
  {
    $c = self::getByNameAndUserCriteria($name, $user, $status);

    return self::doSelect($c);
  }

  public static function findByUserAndStatus($name, $user, $status = null)
  {
    $c = self::getByNameAndUserCriteria(null, $user, $status);

    return self::doSelect($c);
  }

  protected static function getDeleteTokenCriteria($name = null, $user = null, $status = null)
  {
    $c = new Criteria();

    if(!is_null($status))
    {
      $c->add(TokenPeer::STATUS, $status);
    }

    if(!is_null($name))
    {
      $c->add(TokenPeer::NAME, $name);
    }

    if(!is_null($user) && $user instanceof sfGuardUser)
    {
      $c->add(TokenPeer::USER_ID, $user->getId());
    }

    return $c;
  }

  public static function deleteTokens($name = null, $user = null, $status = null)
  {
    $c = self::getDeleteTokenCriteria($name, $user, $status);

    self::doDelete($c);
  }

  public static function findOneByNameAndIdentifier($name, $identifier, $expire)
  {
    $c = new Criteria();

    $c->add(TokenPeer::NAME, $name)
      ->add(TokenPeer::IDENTIFIER, $identifier)
	  ->add(TokenPeer::EXPIRE, $expire ? $expire : time(), Criteria::LESS_EQUAL);

    return self::doSelectOne($c);
  }

  public static function findByUserId($user_id)
  {
    $c = new Criteria();
    $c->add(TokenPeer::USER_ID, $user_id);

    return self::doSelect($c);
  }

  public static function findByUserIdAndName($user_id, $name = 'facebook')
  {
    $c = new Criteria();
    $c->add(TokenPeer::USER_ID, $user_id)
      ->add(TokenPeer::NAME, $name);

    return self::doSelectOne($c);
  }
}