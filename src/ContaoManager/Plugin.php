<?php



namespace GeorgPreissl\Container\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use GeorgPreissl\Container\GeorgPreisslContainerBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            (new BundleConfig(GeorgPreisslContainerBundle::class))->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
