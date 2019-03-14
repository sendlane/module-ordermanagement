<?php

namespace Sendlane\Ordermanagement\Setup;

class InstallData implements InstallDataInterface
{
    private $integrationManager;
    
    public function __construct(ConfigBasedIntegrationManager $integrationManager)
    {
        $this->integrationManager = $integrationManager;
    }
    
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $this->integrationManager->processIntegrationConfig(['testIntegration']);
    }
}
