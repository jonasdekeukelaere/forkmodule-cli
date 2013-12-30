<?php
/**
 * Frontend {{ moduleName }} {{ action }} action
 */
class Frontend{{ moduleName|capitalize }}{{ action|capitalize }} extends FrontendBaseBlock
{
    /**
     * Execute the extra
     *
     * @return void
     */
    public function execute()
    {
        parent::execute();
        $this->loadTemplate();
        $this->getData();
        $this->parse();
    }


    /**
     * Load the data, don't forget to validate the incoming data
     *
     * @return void
     */
    protected function getData()
    {

    }


    /**
     * Parse the data into the template
     *
     * @return void
     */
    protected function parse()
    {
        // Breadcrumbs
        $this->breadcrumb->addElement(
            SpoonFilter::ucfirst(FL::lbl('{{ moduleName|capitalize }}')),
            FrontendNavigation::getBackendURLForBlock('index', '{{ moduleName }}')
        );
{% if action != 'index' %}
        $this->breadcrumb->addElement(
            SpoonFilter::ucfirst(FL::lbl('{{ action|capitalize }}')),
            FrontendNavigation::getBackendURLForBlock('{{ action }}', '{{ moduleName }}')
        );
{% endif %}
    }
}
