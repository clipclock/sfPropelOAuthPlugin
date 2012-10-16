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
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.7532  110375160  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    6.7532  110375688  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.7532  110375160  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    6.7536  110377648  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'           => new sfWidgetFormFilterInput(),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.7541  110378688  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    6.7541  110379144  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.7541  110378688  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    6.7543  110381080  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'      => new sfWidgetFormFilterInput(),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.7546  110378688  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    6.7546  110379152  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.7546  110378688  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    6.7548  110381112  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'   => new sfWidgetFormFilterInput(),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.7709  110378688  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    6.7709  110379200  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.7709  110378688  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    6.7714  110381112  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'         => new sfWidgetFormFilterInput(),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.7724  110378688  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    6.7724  110379192  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.7724  110378688  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    6.7727  110381080  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'         => new sfWidgetFormFilterInput(),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.7863  110378688  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    6.7863  110379216  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.7863  110378688  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    6.7866  110381176  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'     => new sfWidgetFormFilterInput(),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.7870  110378688  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    6.7870  110379192  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.7870  110378688  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    6.7872  110381088  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'         => new sfWidgetFormFilterInput(),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.8164  110378688  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    6.8164  110379184  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.8164  110378688  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    6.8167  110381096  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

' => new sfWidgetFormFilterInput(),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.8177  110378688  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    6.8177  110379184  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.8177  110378688  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    6.8228  110391416  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.8233  110388928  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    6.8233  110389472  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.8233  110388928  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:17
    6.8234  110391392  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.8480  110388928  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    6.8481  110389464  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.8480  110388928  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    6.8490  110401568  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'           => new sfValidatorPass(array('required' => false)),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.8510  110399168  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    6.8510  110399664  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.8510  110399168  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    6.8579  110401552  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'      => new sfValidatorPass(array('required' => false)),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.8584  110399168  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    6.8584  110399664  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.8584  110399168  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    6.8586  110411864  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'   => new sfValidatorPass(array('required' => false)),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.8783  110409408  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    6.8783  110409872  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.8783  110409408  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    6.8795  110411832  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.8813  110409408  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    6.8813  110409944  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.8813  110409408  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    6.8816  110422008  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'         => new sfValidatorPass(array('required' => false)),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.8842  110419648  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    6.8842  110420144  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.8842  110419648  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    6.8844  110422104  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'     => new sfValidatorPass(array('required' => false)),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.8847  110419648  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    6.8847  110420144  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.8847  110419648  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    6.9081  110432320  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'         => new sfValidatorPass(array('required' => false)),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.9086  110429888  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    6.9087  110430384  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.9086  110429888  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    6.9089  110432232  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.9185  110429888  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    6.9186  110430368  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.9185  110429888  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    6.9194  110442536  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.9201  110440128  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    6.9201  110440664  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.9201  110440128  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:27
    6.9383  110442600  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

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
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.9390  110450368  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    6.9390  110450904  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.9390  110450368  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    6.9393  110452776  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'             => 'Number',
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.9438  110450368  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    6.9439  110450904  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.9438  110450368  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    6.9446  110452840  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'           => 'Text',
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.9460  110460608  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    6.9460  110461104  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.9460  110460608  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    6.9693  110463136  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'      => 'Text',
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.9706  110460608  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    6.9707  110461144  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.9706  110460608  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    6.9716  110463064  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'   => 'Text',
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.9733  110460608  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    6.9734  110461104  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.9733  110460608  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    6.9820  110473312  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'        => 'ForeignKey',
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.9835  110470848  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    6.9836  110471344  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    6.9835  110470848  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    6.9848  110473328  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'         => 'Number',
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.0007  110470848  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.0008  110471344  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.0007  110470848  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.0020  110483488  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'         => 'Text',
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.0037  110481088  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.0037  110481624  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.0037  110481088  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.0123  110483568  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'     => 'Text',
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.0137  110481088  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.0138  110481624  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.0137  110481088  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.0143  110493824  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'         => 'Text',
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.0302  110491328  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.0303  110491824  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.0302  110491328  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.0305  110493824  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

' => 'Number',
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.0310  110491328  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.0310  110491864  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.0310  110491328  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.0342  110504072  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'     => 'Date',
      '
Warning: constant(): Couldn't find constant sfMelodyToken::PEER in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 580

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.0355  110501568  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.0356  110502104  15. constant(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:580


Warning: call_user_func() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php on line 583

Call Stack:
    0.0087     636360   1. {main}() /home/lmaxim/clipclock/symfony:0
    0.0222    1066456   2. include('/home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php') /home/lmaxim/clipclock/symfony:14
    0.2196   16323096   3. sfSymfonyCommandApplication->run(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/cli.php:20
    0.2227   16326640   4. sfTask->runFromCLI(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.2228   16327904   5. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.3024   18601360   6. sfPropelBuildAllTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5694  108741328   7. sfTask->run(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildAllTask.class.php:113
    6.5696  108748672   8. sfBaseTask->doRun(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfTask.class.php:173
    6.5698  108753176   9. sfPropelBuildFiltersTask->execute(???, ???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    6.5700  108754768  10. sfGeneratorManager->generate(???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/task/sfPropelBuildFiltersTask.class.php:83
    6.5705  108923640  11. sfPropelFormFilterGenerator->generate(???) /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    6.7529  110252976  12. sfGenerator->evalTemplate(???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormFilterGenerator.class.php:104
    6.7532  110375032  13. require('/home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php') /home/lmaxim/clipclock/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    7.0355  110501568  14. sfPropelFormGenerator->translateColumnName(???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/data/generator/sfPropelFormFilter/default/template/sfPropelFormFilterGeneratedTemplate.php:77
    7.0363  110503992  15. call_user_func(???, ???, ???, ???) /home/lmaxim/clipclock/plugins/sfPropelORMPlugin/lib/generator/sfPropelFormGenerator.class.php:583

'     => 'Date',
    );
  }
}
