<?php

namespace Tighten\Presets;

use Tighten\Formatters;
use Tighten\Linters;

class TightenPreset implements PresetInterface
{
    public function getLinters() : array
    {
        return [
            Linters\AlphabeticalImports::class,
            Linters\ApplyMiddlewareInRoutes::class,
            Linters\ArrayParametersOverViewWith::class,
            Linters\ClassThingsOrder::class,
            Linters\ConcatenationSpacing::class,
            Linters\ImportFacades::class,
            Linters\MailableMethodsInBuild::class,
            Linters\ModelMethodOrder::class,
            Linters\NewLineAtEndOfFile::class,
            Linters\NoCompact::class,
            Linters\NoDd::class,
            Linters\NoDocBlocksForMigrationUpDown::class,
            Linters\NoInlineVarDocs::class,
            Linters\NoLeadingSlashesOnRoutePaths::class,
            Linters\NoMethodVisibilityInTests::class,
            Linters\NoParensEmptyInstantiations::class,
            Linters\NoSpaceAfterBladeDirectives::class,
            Linters\NoStringInterpolationWithoutBraces::class,
            Linters\NoUnusedImports::class,
            Linters\OneLineBetweenClassVisibilityChanges::class,
            Linters\PureRestControllers::class,
            Linters\QualifiedNamesOnlyForClassName::class,
            Linters\RemoveLeadingSlashNamespaces::class,
            Linters\RequestHelperFunctionWherePossible::class,
            Linters\RequestValidation::class,
            Linters\RestControllersMethodOrder::class,
            Linters\SpaceAfterBladeDirectives::class,
            Linters\SpaceAfterSoleNotOperator::class,
            Linters\SpacesAroundBladeRenderContent::class,
            Linters\TrailingCommasOnArrays::class,
            Linters\UseAuthHelperOverFacade::class,
            Linters\UseConfigOverEnv::class,
            Linters\NoJsonDirective::class,
        ];
    }

    public function getFormatters() : array
    {
        return [
            Formatters\AlphabeticalImports::class,
            Formatters\UnusedImports::class,
            Formatters\ExcessSpaceBetweenAndAfterImports::class,
        ];
    }
}
