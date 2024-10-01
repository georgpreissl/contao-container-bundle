<?php



namespace GeorgPreissl\Container;


use Contao\System;
use Contao\ContentElement;
use Symfony\Component\HttpFoundation\Request;


/**
 * Front end content element "container" (wrapper start).
 */
class ContentContainerStart extends ContentElement
{
  /**
   * Template
   * @var string
   */
  protected $strTemplate = 'ce_container_start';

  /**
   * Generate the content element
   */
  protected function compile()
  {
		$request = System::getContainer()->get('request_stack')->getCurrentRequest();

		if ($request && System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest($request))
		{
      $this->strTemplate = 'be_wildcard';
      $this->Template = new \Contao\BackendTemplate($this->strTemplate);
    }
  }

  /**
   * Parse the template
   * @return string
   */
  public function generate()
  {
    parent::generate();

    $this->Template->class = trim('ce_' . str_replace('Start', '', $this->type) . ' ' . $this->cssID[1]);

    return $this->Template->parse();
  }
}

