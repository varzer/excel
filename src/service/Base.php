<?php
/**
 * Author   :   SetMe
 * Time     :   2021/12/6 16:25
 * FileName :   Base.php
 * github   :   http://github.com/varzer
 */

namespace varzer\service;


abstract class Base
{
    /**
     * excel 文件名
     * @var string
     */
    protected $fileName = '';
    /**
     * 生成日期规则
     * 默认:Y-m-d 年-月-日
     * @var string
     */
    protected $dateRule = '';
    /**
     * @var string
     */
    protected $charSet = 'utf-8';


    public function __construct(string $fileName = 'excel-download', string $rule = 'Y-m-d')
    {
        $this->fileName = $fileName;
        $this->dateRule = $rule;
        $this->setExcelDownloadHeader();
    }

    /**
     * 设置 excel header
     * 用于下载excel文件
     */
    protected function setExcelDownloadHeader()
    {
        header( 'Content-type: text/html; charset=utf-8' );
        header( "Content-type:application/vnd.ms-excel" );
        header( "Content-Disposition:filename={$this->fileName}" . date( $this->dateRule, time() ) . ".xls" );
    }

    // 创建excel 下载 数据
    public function createExcelData(array $data)
    {
        if ( !is_array( $data ) || empty( $data[0] ) )
        {
            $this->noData();
            exit;
        }

        $table = '<table border="1" cellpadding="1" cellspacing="0">';

        $tHead = $this->createExcelTHead( $data );
        $tBody = $this->createExcelTBody( $data );

        $table .= $tHead . $tBody . '</table>';

        echo $table;
        exit;
    }


    /**
     * 没有数据的情况下,给出的提示
     */
    private function noData()
    {
        echo '<table border="1" cellpadding="1" cellspacing="0"><tr><td style="font-size: 18px;">no data!</td></tr></table>';
    }

    // 创建excel tHead
    abstract protected function createExcelTHead(array $data);

    // 创建excel tBody
    abstract protected function createExcelTBody(array $data);

}