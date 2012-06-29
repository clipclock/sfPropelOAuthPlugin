<?php

/**
 * sfMelodyToken filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
abstract class BasesfMelodyTokenFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7191   65424728  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    7.7191   65425024  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7191   65424728  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    7.7194   65426328  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'           => new sfWidgetFormFilterInput(),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7199   65426640  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    7.7199   65426904  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7199   65426640  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    7.7200   65428208  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'      => new sfWidgetFormFilterInput(),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7203   65426640  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    7.7203   65426904  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7203   65426640  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    7.7205   65428216  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'   => new sfWidgetFormFilterInput(),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7207   65426640  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    7.7207   65426904  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7207   65426640  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    7.7209   65444592  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'         => new sfWidgetFormFilterInput(),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7212   65443024  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    7.7212   65443288  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7212   65443024  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    7.7213   65444592  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'         => new sfWidgetFormFilterInput(),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7216   65443024  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    7.7216   65443288  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7216   65443024  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    7.7217   65444600  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'     => new sfWidgetFormFilterInput(),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7220   65443024  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    7.7220   65443288  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7220   65443024  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    7.7221   65460976  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'         => new sfWidgetFormFilterInput(),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7223   65459408  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    7.7223   65459672  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7223   65459408  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    7.7224   65460984  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

' => new sfWidgetFormFilterInput(),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7227   65459408  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    7.7227   65459672  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7227   65459408  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    7.7228   65460984  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7230   65459408  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    7.7230   65459672  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7230   65459408  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    7.7232   65477368  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7234   65475792  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    7.7234   65476056  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7234   65475792  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    7.7235   65477360  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'           => new sfValidatorPass(array('required' => false)),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7238   65475792  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    7.7238   65476056  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7238   65475792  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    7.7239   65477360  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'      => new sfValidatorPass(array('required' => false)),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7242   65475792  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    7.7242   65476056  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7242   65475792  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    7.7243   65477368  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'   => new sfValidatorPass(array('required' => false)),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7245   65492176  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    7.7245   65492440  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7245   65492176  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    7.7247   65493744  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7249   65492176  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    7.7249   65492440  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7249   65492176  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    7.7251   65493744  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'         => new sfValidatorPass(array('required' => false)),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7253   65492176  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    7.7253   65492440  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7253   65492176  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    7.7255   65493752  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'     => new sfValidatorPass(array('required' => false)),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7257   65508560  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    7.7257   65508824  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7257   65508560  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    7.7259   65510128  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'         => new sfValidatorPass(array('required' => false)),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7261   65508560  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    7.7261   65508824  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7261   65508560  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    7.7263   65510136  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7265   65508560  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    7.7265   65508824  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7265   65508560  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    7.7266   65510136  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7269   65524944  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    7.7269   65525208  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7269   65524944  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    7.7270   65526520  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('sf_melody_token_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfMelodyToken';
  }

  public function getFields()
  {
    return array(
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7273   65524944  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7273   65525208  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7273   65524944  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7274   65526512  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'             => 'Number',
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7276   65524944  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7276   65525208  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7276   65524944  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7278   65526512  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'           => 'Text',
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7280   65541328  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7280   65541592  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7280   65541328  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7281   65542896  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'      => 'Text',
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7284   65541328  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7284   65541592  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7284   65541328  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7285   65542904  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'   => 'Text',
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7287   65541328  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7287   65541592  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7287   65541328  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7288   65542896  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'        => 'ForeignKey',
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7291   65541328  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7291   65541592  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7291   65541328  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7292   65559280  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'         => 'Number',
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7294   65557712  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7294   65557976  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7294   65557712  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7296   65559280  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'         => 'Text',
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7298   65557712  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7298   65557976  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7298   65557712  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7299   65559288  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'     => 'Text',
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7301   65557712  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7301   65557976  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7301   65557712  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7303   65575664  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'         => 'Text',
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7305   65574096  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7305   65574360  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7305   65574096  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7306   65575672  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

' => 'Number',
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7308   65574096  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7308   65574360  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7308   65574096  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7309   65575672  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'     => 'Date',
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7312   65574096  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7312   65574360  15. constant() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0020     226160   1. {main}() /private/var/www/clipclock.com/symfony:0
    0.0801     491368   2. include('/private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php') /private/var/www/clipclock.com/symfony:14
    0.8284    9793200   3. sfSymfonyCommandApplication->run() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/cli.php:20
    0.8306    9800144   4. sfTask->runFromCLI() /private/var/www/clipclock.com/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.8307    9801752   5. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.9874   10417744   6. sfPropelBuildTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4799   64713240   7. sfTask->run() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildTask.class.php:148
    7.4800   64716456   8. sfBaseTask->doRun() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfTask.class.php:173
    7.4801   64719656   9. sfPropelBuildFiltersTask->execute() /private/var/www/clipclock.com/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    7.4803   64720752  10. sfGeneratorManager->generate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    7.4811   64824240  11. sfPropelFormFilterGenerator->generate() /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    7.7190   65406304  12. sfGenerator->evalTemplate() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    7.7191   65423488  13. require('/private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /private/var/www/clipclock.com/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.7312   65574096  14. sfPropelFormGenerator->translateColumnName() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.7313   65575672  15. call_user_func() /private/var/www/clipclock.com/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'     => 'Date',
    );
  }
}
