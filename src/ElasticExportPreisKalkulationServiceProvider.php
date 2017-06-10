<?php

namespace ElasticExportPreisKalkulation;

use ElasticExportPreisKalkulation\Validators\GeneratorValidator;
use Plenty\Modules\DataExchange\Services\ExportPresetContainer;
use Plenty\Plugin\DataExchangeServiceProvider;

class ElasticExportPreisKalkulationServiceProvider extends DataExchangeServiceProvider
{
    public function register()
    {
        $this->getApplication()->singleton(GeneratorValidator::class);
    }

    public function exports(ExportPresetContainer $container)
    {
        $container->add(
            'Preis-Kalkulation-Plugin',
            'ElasticExportPreisKalkulation\ResultField\PreisKalkulation',
            'ElasticExportPreisKalkulation\Generator\PreisKalkulation',
            '',
            true,
            true
        );
    }
}