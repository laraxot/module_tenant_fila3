<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1691576219,
	'meta' => array (
  'cacheVersion' => 'v10-collectedData',
  'phpstanVersion' => '1.10.28',
  'phpVersion' => 80209,
  'projectConfig' => '{parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], excludePaths: {analyseAndScan: [*.blade.php, F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\build\\*, F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\*, F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\*\\vendor\\*, F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\docs\\*, F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\Tests\\*, F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\_ide_helper.php], analyse: []}, mixinExcludeClasses: [Eloquent], bootstrapFiles: [F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\nunomaduro\\larastan\\bootstrap.php], checkOctaneCompatibility: false, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, viewDirectories: [], checkModelProperties: false, checkPhpDocMissingReturn: false, checkUnusedViews: false, level: max, paths: [F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant], tmpDir: F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\build\\phpstan, reportUnmatchedIgnoredErrors: false, checkMissingIterableValueType: false, checkGenericClassInNonGenericObjectType: false}, conditionalTags: {NunoMaduro\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, NunoMaduro\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, NunoMaduro\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyRule: {phpstan.rules.rule: %checkModelProperties%}, NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyStaticCallRule: {phpstan.rules.rule: %checkModelProperties%}, NunoMaduro\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}}, services: [{class: NunoMaduro\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Types\\RelationDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\ModelRelationsDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: NunoMaduro\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RelationFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ModelFindExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\BuilderModelFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Support\\CollectionHelper}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\CollectionFilterDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\CollectionGenericStaticMethodDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\CollectionGenericStaticMethodDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: NunoMaduro\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: NunoMaduro\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: NunoMaduro\\Larastan\\Rules\\NoModelMakeRule}, {class: NunoMaduro\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyRule}, {class: NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyStaticCallRule}, {class: NunoMaduro\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: NunoMaduro\\Larastan\\Types\\RelationParserHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: NunoMaduro\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @currentPhpVersionSimpleDirectParser, reflectionProvider: @reflectionProvider}}, {class: NunoMaduro\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: NunoMaduro\\Larastan\\Properties\\ModelCastHelper}, {class: NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertiesRuleHelper}, {class: NunoMaduro\\Larastan\\Rules\\ModelRuleHelper}, {class: NunoMaduro\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: NunoMaduro\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: NunoMaduro\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: NunoMaduro\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, NunoMaduro\\Larastan\\Properties\\Schema\\PhpMyAdminDataTypeToPhpTypeConverter, {class: NunoMaduro\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: NunoMaduro\\Larastan\\Rules\\UnusedViewsRule}, {class: NunoMaduro\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: NunoMaduro\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: NunoMaduro\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: NunoMaduro\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: NunoMaduro\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: NunoMaduro\\Larastan\\Collectors\\UsedViewInAnotherViewCollector, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: NunoMaduro\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, NunoMaduro\\Larastan\\ReturnTypes\\AppMakeHelper, NunoMaduro\\Larastan\\Internal\\ConsoleApplicationResolver, NunoMaduro\\Larastan\\Internal\\ConsoleApplicationHelper, NunoMaduro\\Larastan\\Support\\HigherOrderCollectionProxyHelper], rules: [NunoMaduro\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, NunoMaduro\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, NunoMaduro\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, NunoMaduro\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule]}',
  'analysedPaths' => 
  array (
    0 => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant/composer.lock' => 'b3950e721fe7be34dd4fec25b40173d0f68c51e6',
  ),
  'composerInstalled' => 
  array (
    'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'amphp/amp' => 
        array (
          'pretty_version' => 'v2.6.2',
          'version' => '2.6.2.0',
          'reference' => '9d5100cebffa729aaffecd3ad25dc5aeea4f13bb',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../amphp/amp',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/byte-stream' => 
        array (
          'pretty_version' => 'v1.8.1',
          'version' => '1.8.1.0',
          'reference' => 'acbd8002b3536485c997c4e019206b3f10ca15bd',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../amphp/byte-stream',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'barryvdh/laravel-ide-helper' => 
        array (
          'pretty_version' => 'v2.13.0',
          'version' => '2.13.0.0',
          'reference' => '81d5b223ff067a1f38e14c100997e153b837fe4a',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../barryvdh/laravel-ide-helper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'barryvdh/reflection-docblock' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'e6811e927f0ecc37cc4deaa6627033150343e597',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../barryvdh/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brianium/paratest' => 
        array (
          'pretty_version' => 'v7.2.5',
          'version' => '7.2.5.0',
          'reference' => '4d7ad5b6564f63baa1b948ecad05439f22880942',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../brianium/paratest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.11.0',
          'version' => '0.11.0.0',
          'reference' => '0ad82ce168c82ba30d1c01ec86116ab52f589478',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/class-map-generator' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '953cc4ea32e0c31f2185549c7d216d7921f03da9',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/./class-map-generator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'composer/pcre' => 
        array (
          'pretty_version' => '3.1.0',
          'version' => '3.1.0.0',
          'reference' => '4bff79ddd77851fe3cdd11616ed3f92841ba5bd2',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/./pcre',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'composer/semver' => 
        array (
          'pretty_version' => '3.3.2',
          'version' => '3.3.2.0',
          'reference' => '3953f23262f2bff1919fc82183ad9acb13ff62c9',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/./semver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'composer/xdebug-handler' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'ced299686f41dce890debac69273b47ffe98a40c',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/./xdebug-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f41715465d65213d644d3141a6a93081be5d3549',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dnoegel/php-xdg-base-dir' => 
        array (
          'pretty_version' => 'v0.1.1',
          'version' => '0.1.1.0',
          'reference' => '8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../dnoegel/php-xdg-base-dir',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'doctrine/annotations' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => 'e157ef3f3124bbf6fe7ce0ffd109e8a8ef284e7f',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../doctrine/annotations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'doctrine/cache' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1ca8f21980e770095a31456042471a57bc4c68fb',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../doctrine/cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/dbal' => 
        array (
          'pretty_version' => '3.6.5',
          'version' => '3.6.5.0',
          'reference' => '96d5a70fd91efdcec81fc46316efc5bf3da17ddf',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../doctrine/dbal',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/deprecations' => 
        array (
          'pretty_version' => 'v1.1.1',
          'version' => '1.1.1.0',
          'reference' => '612a3ee5ab0d5dd97b7cf3874a6efe24325efac3',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../doctrine/deprecations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/event-manager' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => '750671534e0241a7c50ea5b43f67e23eb5c96f32',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../doctrine/event-manager',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.0.8',
          'version' => '2.0.8.0',
          'reference' => 'f9301a5b2fb1216b2b08f02ba04dc45423db6bff',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '84a527db05647743d50373e0ec53a152f2cde568',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.3.2',
          'version' => '3.3.2.0',
          'reference' => '782ca5968ab8b954773518e9e49a6f892a34b2a8',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '3a85486b709bc384dae8eb78fb2eec649bdb64ff',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.23.0',
          'version' => '1.23.0.0',
          'reference' => 'e3daa170d00fde61ea7719ef47bb09bb8f1d9b01',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'felixfbecker/advanced-json-rpc' => 
        array (
          'pretty_version' => 'v3.2.1',
          'version' => '3.2.1.0',
          'reference' => 'b5f37dbff9a8ad360ca341f3240dc1c168b45447',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../felixfbecker/advanced-json-rpc',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'felixfbecker/language-server-protocol' => 
        array (
          'pretty_version' => 'v1.5.2',
          'version' => '1.5.2.0',
          'reference' => '6e82196ffd7c62f7794d778ca52b69feec9f2842',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../felixfbecker/language-server-protocol',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '0.5.1',
          'version' => '0.5.1.0',
          'reference' => 'b58e5a3933e541dc286cc91fc4f3898bbc6f1623',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../fidry/cpu-core-counter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fidum/laravel-eloquent-morph-to-one' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '8a42d5941869bae52a335881813873e2841a7b21',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../fidum/laravel-eloquent-morph-to-one',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.15.3',
          'version' => '2.15.3.0',
          'reference' => 'c83e88a30524f9360b11f585f71e6b17313b7187',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'friendsofphp/php-cs-fixer' => 
        array (
          'pretty_version' => 'v3.22.0',
          'version' => '3.22.0.0',
          'reference' => '92b019f6c8d79aa26349d0db7671d37440dc0ff3',
          'type' => 'application',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../friendsofphp/php-cs-fixer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '58571acbaa5f9f462c9c77e911700ac66f446d4e',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.1',
          'version' => '1.1.1.0',
          'reference' => '672eff8cf1d6fe1ef09ca0f89c4b287d6a3eb831',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.7.0',
          'version' => '7.7.0.0',
          'reference' => 'fb7566caccf22d74d1ab270de3551f72a58399f5',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => '111166291a0f8130081195ac4556a5587d7f1b5d',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.6.0',
          'version' => '2.6.0.0',
          'reference' => '8bd7c33a0734ae1c5d074360512beb716bef3f77',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.1',
          'version' => '1.0.1.0',
          'reference' => 'b945d74a55a25a949158444f09ec0d3c120d69e2',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.0.1',
          'version' => '2.0.1.0',
          'reference' => '8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v10.18.0',
          ),
        ),
        'jean85/pretty-package-versions' => 
        array (
          'pretty_version' => '2.0.5',
          'version' => '2.0.5.0',
          'reference' => 'ae547e455a3d8babd07b96966b17d7fd21d9c6af',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../jean85/pretty-package-versions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v10.18.0',
          'version' => '10.18.0.0',
          'reference' => '9d41928900f7ecf409627a7d06c0a4dfecff2ea7',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.1.4',
          'version' => '0.1.4.0',
          'reference' => '1b3ab520a75eddefcda99f49fb551d231769b1fa',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v1.3.1',
          'version' => '1.3.1.0',
          'reference' => 'e5a3057a5591e1cfe8183034b0203921abe2c902',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravelcollective/html' => 
        array (
          'pretty_version' => 'v6.4.1',
          'version' => '6.4.1.0',
          'reference' => '64ddfdcaeeb8d332bd98bef442bef81e39c3910b',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../laravelcollective/html',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laraxot/module_xot' => 
        array (
          'pretty_version' => 'dev-master',
          'version' => 'dev-master',
          'reference' => '3cb91c8dd92b3a8c751e00bcf871aac2a6590d07',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../laraxot/module_xot',
          'aliases' => 
          array (
            0 => '9999999-dev',
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.4.0',
          'version' => '2.4.0.0',
          'reference' => 'd44a24690f16b8c1808bf13b1bd54ae4c63ea048',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.15.1',
          'version' => '3.15.1.0',
          'reference' => 'a141d430414fcb8bf797a18716b09f759a385bed',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.15.0',
          'version' => '3.15.0.0',
          'reference' => '543f64c397fefdf9cfeac443ffb6beff602796b3',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.13.0',
          'version' => '1.13.0.0',
          'reference' => 'a6dfb1194a2946fcdc1f38219445234f65b35c96',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'livewire/livewire' => 
        array (
          'pretty_version' => 'v2.12.5',
          'version' => '2.12.5.0',
          'reference' => '96a249f5ab51d8377817d802f91d1e440869c1d6',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../livewire/livewire',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.6',
          'version' => '1.6.6.0',
          'reference' => 'b8e0bb7d8c604046539c1115994632c74dcb361e',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.4.0',
          'version' => '3.4.0.0',
          'reference' => 'e2392369686d420ca32df3803de28b5d6f76867d',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.11.1',
          'version' => '1.11.1.0',
          'reference' => '7284c22080590fb39f2ffa3e9057f10a4ddd0e0c',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '2.68.1',
          'version' => '2.68.1.0',
          'reference' => '4f991ed2a403c85efbc4f23eb4030063fdbe01da',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'netresearch/jsonmapper' => 
        array (
          'pretty_version' => 'v4.2.0',
          'version' => '4.2.0.0',
          'reference' => 'f60565f8c0566a31acf06884cdaa591867ecc956',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../netresearch/jsonmapper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nette/php-generator' => 
        array (
          'pretty_version' => 'v4.0.8',
          'version' => '4.0.8.0',
          'reference' => 'd9157df8463b198dcbcd9f979fb09a9367c7fe99',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../nette/php-generator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.2.3',
          'version' => '1.2.3.0',
          'reference' => 'abbdbb70e0245d5f3bf77874cea1dfb0c930d06f',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.0.1',
          'version' => '4.0.1.0',
          'reference' => '9124157137da01b1f5a5a22d6486cb975f26db7e',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v4.16.0',
          'version' => '4.16.0.0',
          'reference' => '19526a33fb561ef417e822e85f08a00db4059c17',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v7.8.1',
          'version' => '7.8.1.0',
          'reference' => '61553ad3260845d7e3e49121b7074619233d361b',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/larastan' => 
        array (
          'pretty_version' => 'v2.6.4',
          'version' => '2.6.4.0',
          'reference' => '6c5e8820f3db6397546f3ce48520af9d312aed27',
          'type' => 'phpstan-extension',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../nunomaduro/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v1.15.1',
          'version' => '1.15.1.0',
          'reference' => '8ab0b32c8caa4a2e09700ea32925441385e4a5dc',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nwidart/laravel-modules' => 
        array (
          'pretty_version' => 'v10.0.0',
          'version' => '10.0.0.0',
          'reference' => '35e514f13cb8ae8dce093e9794785fea27319d81',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../nwidart/laravel-modules',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'orchestra/testbench' => 
        array (
          'pretty_version' => 'v8.6.2',
          'version' => '8.6.2.0',
          'reference' => '6d8fea66a95d7818045083e4db0b474fbabcbd36',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../orchestra/testbench',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/testbench-core' => 
        array (
          'pretty_version' => 'v8.6.1',
          'version' => '8.6.1.0',
          'reference' => '69ca36f0713faad03dffab4708d3381360672019',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../orchestra/testbench-core',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest' => 
        array (
          'pretty_version' => 'v2.12.2',
          'version' => '2.12.2.0',
          'reference' => 'e3a21384e69d6343f8223578bbc38d80e1224f08',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../pestphp/pest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin' => 
        array (
          'pretty_version' => 'v2.0.1',
          'version' => '2.0.1.0',
          'reference' => 'e3a3da262b73bdcbf3fad4dc9846c3c4921f2147',
          'type' => 'composer-plugin',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../pestphp/pest-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-arch' => 
        array (
          'pretty_version' => 'v2.2.3',
          'version' => '2.2.3.0',
          'reference' => 'f44834b728b44028fb7d99c4e3efc88b699728a8',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../pestphp/pest-plugin-arch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-laravel' => 
        array (
          'pretty_version' => 'v2.1.0',
          'version' => '2.1.0.0',
          'reference' => 'db6295986e3c506dbf37c16ddc64c4a83e96bd75',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../pestphp/pest-plugin-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => '97803eca37d319dfa7826cc2437fc020857acb53',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-common' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../phpdocumentor/reflection-common',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpdocumentor/reflection-docblock' => 
        array (
          'pretty_version' => '5.3.0',
          'version' => '5.3.0.0',
          'reference' => '622548b623e81ca6d78b721c5e029f4ce664f170',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../phpdocumentor/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/type-resolver' => 
        array (
          'pretty_version' => '1.7.2',
          'version' => '1.7.2.0',
          'reference' => 'b2fe4d22a5426f38e014855322200b97b5362c0d',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpmyadmin/sql-parser' => 
        array (
          'pretty_version' => '5.8.0',
          'version' => '5.8.0.0',
          'reference' => 'db1b3069b5dbc220d393d67ff911e0ae76732755',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../phpmyadmin/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.1',
          'version' => '1.9.1.0',
          'reference' => 'dd3a383e599f49777d8b628dadbb90cae435b87e',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpdoc-parser' => 
        array (
          'pretty_version' => '1.23.1',
          'version' => '1.23.1.0',
          'reference' => '846ae76eef31c6d7790fac9bc399ecee45160b26',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../phpstan/phpdoc-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '1.10.28',
          'version' => '1.10.28.0',
          'reference' => 'e4545b55904ebef470423d3ddddb74fa7325497a',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '10.1.3',
          'version' => '10.1.3.0',
          'reference' => 'be1fe461fdc917de2a29a452ccf2657d325b443d',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '4.0.2',
          'version' => '4.0.2.0',
          'reference' => '5647d65443818959172645e7ed999217360654b6',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => 'f5e568ba02fa5ba0ddd0f618391d5a9ea50b06d7',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '9f3d3709577a527025f55bcf0f7ab8052c8bb37d',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => 'e2a2d67966e740530f4a3343fe2e030ffdc1161d',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '10.3.1',
          'version' => '10.3.1.0',
          'reference' => 'd442ce7c4104d5683c12e67e4dcb5058159e9804',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pimple/pimple' => 
        array (
          'pretty_version' => 'v3.5.0',
          'version' => '3.5.0.0',
          'reference' => 'a94b3a4db7fb774b3d78dad2315ddc07629e1bed',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../pimple/pimple',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psalm/plugin-laravel' => 
        array (
          'pretty_version' => 'v2.8.0',
          'version' => '2.8.0.0',
          'reference' => '0b42a51f977d216e0b5d649f68346e2f324f4a55',
          'type' => 'psalm-plugin',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../psalm/plugin-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psalm/psalm' => 
        array (
          'dev_requirement' => true,
          'provided' => 
          array (
            0 => '5.14.1',
          ),
        ),
        'psr/cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => 'aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../psr/cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.2',
          'version' => '1.0.2.0',
          'reference' => '0955afe48220520692d2d09f7ab7e0f93ffd6a31',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.0.2',
          'version' => '1.0.2.0',
          'reference' => 'e616d01114759c4c489f93b099585439f795fe35',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => 'fe5ea303b0887d5caefd3d431c3e61ad47037001',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '3.0.0',
            1 => '1.0|2.0|3.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => 'a4b48764bfbb8f3a6a4d1aeb1a35bb5e9ecac4a5',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.7.4',
          'version' => '4.7.4.0',
          'reference' => '60a4c63ab724854332900504274f6150ff26d286',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.7.4',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => 'efdc130dbbbb8ef0b545a994fd811725c5282cae',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => 'a81fee9eef0b7a76af11d121767abc44c104e503',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '5e3a687f7d8ae33fb362c5c0743794bbb2420a1d',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => '72f01e6586e0caf6af81297897bd112eb7e9627c',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => 'e67d240970c9dc7ea7b2123a6d520e334dd61dc6',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '5.0.3',
          'version' => '5.0.3.0',
          'reference' => '912dc2fbe3e3c1e7873313cc801b100b6c68c87b',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => '43c751b41d74f96cbbd4e07b7aec9675651e2951',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => 'f3ec4bf931c0b31e5b413f5b4fc970a7d03338c0',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => '7ea9ead78f6d380d2a667864c132c2f7b83055e4',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => '17c4d940ecafb3d15d2cf916f4108f664e28b130',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => '202d0e344a580d7f7d04b3fafce6933e59dae906',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '24ed13d98130f0e7122df55d06c5c4942a577957',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => '05909fb5bc7df4c52992396d0116aed689f93712',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => '462699a16464c3944eefc02ebdd77882bd3925bf',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'c51fa83a5d8f43f1402e3f32a005e6262244ef17',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/array-to-xml' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => 'f9ab39c808500c347d5a8b6b13310bd5221e39e7',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../spatie/array-to-xml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/backtrace' => 
        array (
          'pretty_version' => '1.5.3',
          'version' => '1.5.3.0',
          'reference' => '483f76a82964a0431aa836b6ed0edde0c248e3ab',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../spatie/backtrace',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/eloquent-sortable' => 
        array (
          'pretty_version' => '4.0.2',
          'version' => '4.0.2.0',
          'reference' => '74994d10a17d15d2cdb319d6b2ad7cb6fa067c0a',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../spatie/eloquent-sortable',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-data' => 
        array (
          'pretty_version' => '3.7.1',
          'version' => '3.7.1.0',
          'reference' => '5b1220596865ec8834cb5e2be5da7ab05ed38af0',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../spatie/laravel-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-model-status' => 
        array (
          'pretty_version' => '1.14.0',
          'version' => '1.14.0.0',
          'reference' => '7ffee82bf3017f22c030acd1b174f161be8a36fa',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../spatie/laravel-model-status',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-package-tools' => 
        array (
          'pretty_version' => '1.15.0',
          'version' => '1.15.0.0',
          'reference' => 'efab1844b8826443135201c4443690f032c3d533',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../spatie/laravel-package-tools',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-permission' => 
        array (
          'pretty_version' => '5.10.2',
          'version' => '5.10.2.0',
          'reference' => '671e46e079cbd4990a98427daaa09f4977b57ca9',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../spatie/laravel-permission',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-queueable-action' => 
        array (
          'pretty_version' => '2.14.10',
          'version' => '2.14.10.0',
          'reference' => '70d84f048f25a0faef66572ffc96d15cf0317fbb',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../spatie/laravel-queueable-action',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-ray' => 
        array (
          'pretty_version' => '1.32.6',
          'version' => '1.32.6.0',
          'reference' => '8526dd6c6c838b4bac4e0df2ea7896b688b0d43e',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../spatie/laravel-ray',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/laravel-tags' => 
        array (
          'pretty_version' => '4.5.1',
          'version' => '4.5.1.0',
          'reference' => 'fcc6c532fa0ce0d1eefe886fd44dcedcca3173aa',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../spatie/laravel-tags',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-translatable' => 
        array (
          'pretty_version' => '6.5.3',
          'version' => '6.5.3.0',
          'reference' => '1906a3f1492c4b4b99d9f150b67cca4b697d85d7',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../spatie/laravel-translatable',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-typescript-transformer' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '66e699150679a151877d8070b8d2c9b27a7ef82f',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../spatie/laravel-typescript-transformer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/macroable' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => 'ec2c320f932e730607aff8052c44183cf3ecb072',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../spatie/macroable',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/pest-plugin-snapshots' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => '499d23571f6acb4ba59a46d4f7a1ec9ba6904d2d',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../spatie/pest-plugin-snapshots',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/phpunit-snapshot-assertions' => 
        array (
          'pretty_version' => '5.0.2',
          'version' => '5.0.2.0',
          'reference' => 'b1748c4b62750a2ea2e2df544d962806e0f8995e',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../spatie/phpunit-snapshot-assertions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/ray' => 
        array (
          'pretty_version' => '1.37.2',
          'version' => '1.37.2.0',
          'reference' => 'dea16182d4bc9d9833adec7e39fbb3d7b553425d',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../spatie/ray',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/test-time' => 
        array (
          'pretty_version' => '1.3.2',
          'version' => '1.3.2.0',
          'reference' => 'f549f4c0765d29a5a9d90587e29e314a384ad768',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../spatie/test-time',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/typescript-transformer' => 
        array (
          'pretty_version' => '2.2.1',
          'version' => '2.2.1.0',
          'reference' => 'baf1686675583ce265cef80134c73e1ba8422cfd',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../spatie/typescript-transformer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v6.3.2',
          'version' => '6.3.2.0',
          'reference' => 'aa5d64ad3f63f2e48964fc81ee45cb318a723898',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v6.3.2',
          'version' => '6.3.2.0',
          'reference' => '883d961421ab1709877c10ac99451632a3d6fa57',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.3.0',
          'version' => '3.3.0.0',
          'reference' => '7c3aff79d10325257a001fcf92d991f24fc967cf',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v6.3.2',
          'version' => '6.3.2.0',
          'reference' => '85fd65ed295c4078367c784e8a5a6cee30348b7a',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v6.3.2',
          'version' => '6.3.2.0',
          'reference' => 'adb01fe097a4ee930db9258a3cc906b5beb5cf2e',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.3.0',
          'version' => '3.3.0.0',
          'reference' => 'a76aed96a42d2b521153fb382d418e30d18b59df',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/filesystem' => 
        array (
          'pretty_version' => 'v6.3.1',
          'version' => '6.3.1.0',
          'reference' => 'edd36776956f2a6fcf577edb5b05eb0e3bdc52ae',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/filesystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v6.3.3',
          'version' => '6.3.3.0',
          'reference' => '9915db259f67d21eefee768c1abcf1cc61b1fc9e',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v6.3.2',
          'version' => '6.3.2.0',
          'reference' => '43ed99d30f5f466ffa00bdac3f5f7aa9cd7617c3',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v6.3.3',
          'version' => '6.3.3.0',
          'reference' => 'd3b567f0addf695e10b0c6d57564a9bea2e058ee',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v6.3.0',
          'version' => '6.3.0.0',
          'reference' => '7b03d9be1dea29bfec0a6c7b603f5072a4c97435',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v6.3.3',
          'version' => '6.3.3.0',
          'reference' => '9a0cbd52baa5ba5a5b1f0cacc59466f194730f98',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/options-resolver' => 
        array (
          'pretty_version' => 'v6.3.0',
          'version' => '6.3.0.0',
          'reference' => 'a10f19f5198d589d5c33333cffe98dc9820332dd',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/options-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '5bbc823adecdae860bb64756d639ecfec17b050a',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-iconv' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '927013f3aac555983a5059aada98e1907d842695',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/polyfill-iconv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '511a08c03c1960e08a883f4cffcacd219b758354',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '639084e360537a19f9ee352433b84ce831f3d2da',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '19bd1e4fcd5b91116f14d8533c57831ed00571b6',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php72' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '869329b1e9894268a8a61dabb69153029b7a8c97',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/polyfill-php72',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php81' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '707403074c8ea6e2edaf8794b0157a0bfa52157a',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/polyfill-php81',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '508c652ba3ccf69f8c97f251534f229791b52a57',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => 'f3cf1a645c2734236ed1e2e671e273eeb3586166',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v6.3.2',
          'version' => '6.3.2.0',
          'reference' => 'c5ce962db0d9b6e80247ca5eb9af6472bd4d7b5d',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/property-access' => 
        array (
          'pretty_version' => 'v6.3.2',
          'version' => '6.3.2.0',
          'reference' => '2dc4f9da444b8f8ff592e95d570caad67924f1d0',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/property-access',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/property-info' => 
        array (
          'pretty_version' => 'v6.3.0',
          'version' => '6.3.0.0',
          'reference' => '7f3a03716112269741fe2a809f8f791a371d1fcd',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/property-info',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v6.3.3',
          'version' => '6.3.3.0',
          'reference' => 'e7243039ab663822ff134fbc46099b5fdfa16f6a',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/serializer' => 
        array (
          'pretty_version' => 'v6.3.3',
          'version' => '6.3.3.0',
          'reference' => '33deb86d212893042d7758d452aa39d19ca0efe3',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/serializer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.3.0',
          'version' => '3.3.0.0',
          'reference' => '40da9cc13ec349d9e4966ce18b5fbcd724ab10a4',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/stopwatch' => 
        array (
          'pretty_version' => 'v6.3.0',
          'version' => '6.3.0.0',
          'reference' => 'fc47f1015ec80927ff64ba9094dfe8b9d48fe9f2',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/stopwatch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v6.3.2',
          'version' => '6.3.2.0',
          'reference' => '53d1a83225002635bca3482fcbf963001313fb68',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v6.3.3',
          'version' => '6.3.3.0',
          'reference' => '3ed078c54bc98bbe4414e1e9b2d5e85ed5a5c8bd',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.3.0',
          'version' => '3.3.0.0',
          'reference' => '02c24deb352fb0d79db5486c0c79905a85e37e86',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v6.3.0',
          'version' => '6.3.0.0',
          'reference' => '01b0f20b1351d997711c56f1638f7a8c3061e384',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v6.3.3',
          'version' => '6.3.3.0',
          'reference' => '77fb4f2927f6991a9843633925d111147449ee7a',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v6.3.3',
          'version' => '6.3.3.0',
          'reference' => 'e23292e8c07c85b971b44c1c4b87af52133e2add',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ta-tikoma/phpunit-architecture-test' => 
        array (
          'pretty_version' => '0.7.4',
          'version' => '0.7.4.0',
          'reference' => 'abe1f8a5f4635e7cbe0a8a37d6b8d20c687af0f2',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../ta-tikoma/phpunit-architecture-test',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'thecodingmachine/phpstan-safe-rule' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '8a7b88e0d54f209a488095085f183e9174c40e1e',
          'type' => 'phpstan-extension',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../thecodingmachine/phpstan-safe-rule',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'thecodingmachine/safe' => 
        array (
          'pretty_version' => 'v2.5.0',
          'version' => '2.5.0.0',
          'reference' => '3115ecd6b4391662b4931daac4eba6b07a2ac1f0',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../thecodingmachine/safe',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.2.1',
          'version' => '1.2.1.0',
          'reference' => '34a41e998c2183e22995f158c581e7b5e755ab9e',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => '2.2.6',
          'version' => '2.2.6.0',
          'reference' => 'c42125b83a4fa63b187fdf29f9c93cb7733da30c',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vimeo/psalm' => 
        array (
          'pretty_version' => '5.14.1',
          'version' => '5.14.1.0',
          'reference' => 'b9d355e0829c397b9b3b47d0c0ed042a8a70284d',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../vimeo/psalm',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.5.0',
          'version' => '5.5.0.0',
          'reference' => '1a7ea2afc49c3ee6d87061f5a233e3a035d0eae7',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => 'b56450eed252f6801410d810c8e1727224ae0743',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '1.11.0',
          'version' => '1.11.0.0',
          'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'zbateson/mail-mime-parser' => 
        array (
          'pretty_version' => '2.4.0',
          'version' => '2.4.0.0',
          'reference' => '20b3e48eb799537683780bc8782fbbe9bc25934a',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../zbateson/mail-mime-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'zbateson/mb-wrapper' => 
        array (
          'pretty_version' => '1.2.0',
          'version' => '1.2.0.0',
          'reference' => 'faf35dddfacfc5d4d5f9210143eafd7a7fe74334',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../zbateson/mb-wrapper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'zbateson/stream-decorators' => 
        array (
          'pretty_version' => '1.2.1',
          'version' => '1.2.1.0',
          'reference' => '783b034024fda8eafa19675fb2552f8654d3a3e9',
          'type' => 'library',
          'install_path' => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\composer/../zbateson/stream-decorators',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\nunomaduro\\larastan\\bootstrap.php' => '83df8de2ac49123d1901c7429060f745055290db',
    'phar://F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\Attribute.php' => 'eaf9127f074e9c7ebc65043ec4050f9fed60c2bb',
    'phar://F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar://F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar://F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'Phar',
    3 => 'Reflection',
    4 => 'SPL',
    5 => 'SimpleXML',
    6 => 'Zend OPcache',
    7 => 'bcmath',
    8 => 'calendar',
    9 => 'ctype',
    10 => 'curl',
    11 => 'date',
    12 => 'dom',
    13 => 'exif',
    14 => 'fileinfo',
    15 => 'filter',
    16 => 'gd',
    17 => 'gettext',
    18 => 'hash',
    19 => 'iconv',
    20 => 'intl',
    21 => 'json',
    22 => 'libxml',
    23 => 'mbstring',
    24 => 'mysqli',
    25 => 'mysqlnd',
    26 => 'openssl',
    27 => 'pcre',
    28 => 'pdo_mysql',
    29 => 'pdo_sqlite',
    30 => 'random',
    31 => 'readline',
    32 => 'session',
    33 => 'sockets',
    34 => 'sodium',
    35 => 'sqlite3',
    36 => 'standard',
    37 => 'tokenizer',
    38 => 'xml',
    39 => 'xmlreader',
    40 => 'xmlwriter',
    41 => 'xsl',
    42 => 'zip',
    43 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => 'max',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
); },
	'collectedDataCallback' => static function (): array { return array (
); },
	'dependencies' => array (
  'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\Config\\config.php' => 
  array (
    'fileHash' => 'eb610bed374a72be24c932ae92093022a11e1090',
    'dependentFiles' => 
    array (
    ),
  ),
  'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\Config\\test.php' => 
  array (
    'fileHash' => 'd2a8449ab2e13a8594c90b3f3f83f3bd8987427d',
    'dependentFiles' => 
    array (
    ),
  ),
  'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\Config\\xra.php' => 
  array (
    'fileHash' => '423d70fe5c0083fc3f41ec573b2aeaf21d78515c',
    'dependentFiles' => 
    array (
    ),
  ),
  'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\Database\\Seeders\\TenantDatabaseSeeder.php' => 
  array (
    'fileHash' => 'b20894e690444396b73b0b66a65cdbb0c0b4e91a',
    'dependentFiles' => 
    array (
    ),
  ),
  'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\Providers\\RouteServiceProvider.php' => 
  array (
    'fileHash' => '6666b6aae1122ecae891f994616ba32307a89529',
    'dependentFiles' => 
    array (
    ),
  ),
  'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\Providers\\TenantServiceProvider.php' => 
  array (
    'fileHash' => 'adc90fc2427aabda0809f9dad82b4818a1c3221e',
    'dependentFiles' => 
    array (
    ),
  ),
  'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\Routes\\api.php' => 
  array (
    'fileHash' => '4beb575f818c275d265545ec72eb6bc12e9ea603',
    'dependentFiles' => 
    array (
    ),
  ),
  'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\Routes\\web.php' => 
  array (
    'fileHash' => '135ec03dca3c608814b34849f51a098e05d7fca2',
    'dependentFiles' => 
    array (
    ),
  ),
  'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\Services\\TenantService.php' => 
  array (
    'fileHash' => 'fa59184aaf8dd32e8c9e7801a0d5b660c713f8e0',
    'dependentFiles' => 
    array (
      0 => 'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\Providers\\TenantServiceProvider.php',
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\Database\\Seeders\\TenantDatabaseSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Tenant\\Database\\Seeders\\TenantDatabaseSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run the database seeds.
     *
     * @return void
     */',
             'namespace' => 'Modules\\Tenant\\Database\\Seeders',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'seeder' => 'Illuminate\\Database\\Seeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\Providers\\RouteServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Tenant\\Providers\\RouteServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Modules\\Xot\\Providers\\XotBaseRouteServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'moduleNamespace',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The module namespace to assume when generating URLs to actions.
     */',
             'namespace' => 'Modules\\Tenant\\Providers',
             'uses' => 
            array (
              'xotbaserouteserviceprovider' => 'Modules\\Xot\\Providers\\XotBaseRouteServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'module_dir',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'module_ns',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\Providers\\TenantServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Tenant\\Providers\\TenantServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Modules\\Xot\\Providers\\XotBaseServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'module_dir',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'module_ns',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'module_name',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'bootCallback',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mergeConfigs',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'registerCallback',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'F:\\var\\www\\_bases\\base_quaeris_fila\\laravel\\Modules\\Tenant\\Services\\TenantService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Tenant\\Services\\TenantService',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class TenantService.
 */',
         'namespace' => 'Modules\\Tenant\\Services',
         'uses' => 
        array (
          'exception' => 'Exception',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'arr' => 'Illuminate\\Support\\Arr',
          'collection' => 'Illuminate\\Support\\Collection',
          'config' => 'Illuminate\\Support\\Facades\\Config',
          'file' => 'Illuminate\\Support\\Facades\\File',
          'str' => 'Illuminate\\Support\\Str',
          'panelservice' => 'Modules\\Cms\\Services\\PanelService',
          'fileservice' => 'Modules\\Xot\\Services\\FileService',
          'module' => 'Nwidart\\Modules\\Facades\\Module',
          'assert' => 'Webmozart\\Assert\\Assert',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getName',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Undocumented function.
     */',
             'namespace' => 'Modules\\Tenant\\Services',
             'uses' => 
            array (
              'exception' => 'Exception',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'arr' => 'Illuminate\\Support\\Arr',
              'collection' => 'Illuminate\\Support\\Collection',
              'config' => 'Illuminate\\Support\\Facades\\Config',
              'file' => 'Illuminate\\Support\\Facades\\File',
              'str' => 'Illuminate\\Support\\Str',
              'panelservice' => 'Modules\\Cms\\Services\\PanelService',
              'fileservice' => 'Modules\\Xot\\Services\\FileService',
              'module' => 'Nwidart\\Modules\\Facades\\Module',
              'assert' => 'Webmozart\\Assert\\Assert',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'filePath',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Undocumented function.
     */',
             'namespace' => 'Modules\\Tenant\\Services',
             'uses' => 
            array (
              'exception' => 'Exception',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'arr' => 'Illuminate\\Support\\Arr',
              'collection' => 'Illuminate\\Support\\Collection',
              'config' => 'Illuminate\\Support\\Facades\\Config',
              'file' => 'Illuminate\\Support\\Facades\\File',
              'str' => 'Illuminate\\Support\\Str',
              'panelservice' => 'Modules\\Cms\\Services\\PanelService',
              'fileservice' => 'Modules\\Xot\\Services\\FileService',
              'module' => 'Nwidart\\Modules\\Facades\\Module',
              'assert' => 'Webmozart\\Assert\\Assert',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'filename',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'config',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * tenant config.
     * ret_old \\Illuminate\\Config\\Repository|\\Illuminate\\Contracts\\Foundation\\Application|mixed.
     * ret_old1 \\Illuminate\\Config\\Repository|mixed.
     *
     * @param string|int|array|null $default
     *
     * @return string|int|array|float|null
     */',
             'namespace' => 'Modules\\Tenant\\Services',
             'uses' => 
            array (
              'exception' => 'Exception',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'arr' => 'Illuminate\\Support\\Arr',
              'collection' => 'Illuminate\\Support\\Collection',
              'config' => 'Illuminate\\Support\\Facades\\Config',
              'file' => 'Illuminate\\Support\\Facades\\File',
              'str' => 'Illuminate\\Support\\Str',
              'panelservice' => 'Modules\\Cms\\Services\\PanelService',
              'fileservice' => 'Modules\\Xot\\Services\\FileService',
              'module' => 'Nwidart\\Modules\\Facades\\Module',
              'assert' => 'Webmozart\\Assert\\Assert',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'default',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getConfigPath',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'saveConfig',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'modelClass',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Undocumented function.
     */',
             'namespace' => 'Modules\\Tenant\\Services',
             'uses' => 
            array (
              'exception' => 'Exception',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'arr' => 'Illuminate\\Support\\Arr',
              'collection' => 'Illuminate\\Support\\Collection',
              'config' => 'Illuminate\\Support\\Facades\\Config',
              'file' => 'Illuminate\\Support\\Facades\\File',
              'str' => 'Illuminate\\Support\\Str',
              'panelservice' => 'Modules\\Cms\\Services\\PanelService',
              'fileservice' => 'Modules\\Xot\\Services\\FileService',
              'module' => 'Nwidart\\Modules\\Facades\\Module',
              'assert' => 'Webmozart\\Assert\\Assert',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'model',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws \\ReflectionException
     */',
             'namespace' => 'Modules\\Tenant\\Services',
             'uses' => 
            array (
              'exception' => 'Exception',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'arr' => 'Illuminate\\Support\\Arr',
              'collection' => 'Illuminate\\Support\\Collection',
              'config' => 'Illuminate\\Support\\Facades\\Config',
              'file' => 'Illuminate\\Support\\Facades\\File',
              'str' => 'Illuminate\\Support\\Str',
              'panelservice' => 'Modules\\Cms\\Services\\PanelService',
              'fileservice' => 'Modules\\Xot\\Services\\FileService',
              'module' => 'Nwidart\\Modules\\Facades\\Module',
              'assert' => 'Webmozart\\Assert\\Assert',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Model',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'localizedMarkdownPath',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Find the path to a localized Markdown resource. copiata da jetstream.php.
     */',
             'namespace' => 'Modules\\Tenant\\Services',
             'uses' => 
            array (
              'exception' => 'Exception',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'arr' => 'Illuminate\\Support\\Arr',
              'collection' => 'Illuminate\\Support\\Collection',
              'config' => 'Illuminate\\Support\\Facades\\Config',
              'file' => 'Illuminate\\Support\\Facades\\File',
              'str' => 'Illuminate\\Support\\Str',
              'panelservice' => 'Modules\\Cms\\Services\\PanelService',
              'fileservice' => 'Modules\\Xot\\Services\\FileService',
              'module' => 'Nwidart\\Modules\\Facades\\Module',
              'assert' => 'Webmozart\\Assert\\Assert',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getConfigNames',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array
     */',
             'namespace' => 'Modules\\Tenant\\Services',
             'uses' => 
            array (
              'exception' => 'Exception',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'arr' => 'Illuminate\\Support\\Arr',
              'collection' => 'Illuminate\\Support\\Collection',
              'config' => 'Illuminate\\Support\\Facades\\Config',
              'file' => 'Illuminate\\Support\\Facades\\File',
              'str' => 'Illuminate\\Support\\Str',
              'panelservice' => 'Modules\\Cms\\Services\\PanelService',
              'fileservice' => 'Modules\\Xot\\Services\\FileService',
              'module' => 'Nwidart\\Modules\\Facades\\Module',
              'assert' => 'Webmozart\\Assert\\Assert',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
