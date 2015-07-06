<?php

class responseResult
{

    /**
     * @var string $description
     * @access public
     */
    public $description = null;

    /**
     * @var string $exceptionDescription
     * @access public
     */
    public $exceptionDescription = null;

    /**
     * @var locale $locale
     * @access public
     */
    public $locale = null;

    /**
     * @var int $result
     * @access public
     */
    public $result = null;

    /**
     * @param string $description
     * @param string $exceptionDescription
     * @param locale $locale
     * @param int $result
     * @access public
     */
    public function __construct($description, $exceptionDescription, $locale, $result)
    {
      $this->description = $description;
      $this->exceptionDescription = $exceptionDescription;
      $this->locale = $locale;
      $this->result = $result;
    }

}
