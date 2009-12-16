<?php

/**
 * sfExcelReaderExample actions.
 *
 * @package     sfExcelReaderPlugin
 * @author      Tomasz Ducin <tomasz.ducin@gmail.com>
 */

class sfExcelReaderExampleActions extends sfActions
{
  /**
   * Demo action. Interprets and displays an example xls file.
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request)
  {
    error_reporting(E_ALL ^ E_NOTICE);
    require_once 'excel_reader2.php';
    $this->data = new Spreadsheet_Excel_Reader("example.xls");
  }
}
