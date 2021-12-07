<?php
/**
 * Author   :   SetMe
 * Time     :   2021/12/6 16:23
 * FileName :   Excel.php
 * github   :   http://github.com/varzer
 */

namespace varzer\service;


class FactoryExcel
    extends Base
{
    protected function createExcelTHead(array $data)
    {
        $tHead = <<<EOF
        <thead>
            <tr>
                <th rowspan="2">日期</th>
                <th colspan="4">127-9</th>
                <th colspan="4">127-10</th>
                <th colspan="4">127-11</th>
                <th colspan="4">127-12</th>
                <th colspan="4">127-13</th>
                <th colspan="4">127-14</th>
                <th colspan="4">128-1</th>
                <th colspan="4">128-2</th>
                <th colspan="4">128-3</th>
                <th colspan="4">128-4</th>
            </tr>
            <tr>
                <!-- 127-9 -->
                <td>peak</td>
                <td>top</td>
                <td>average</td>
                <td>bottom</td>

                <!-- 127-10 -->
                <td>peak</td>
                <td>top</td>
                <td>average</td>
                <td>bottom</td>

                <!-- 127-11 -->
                <td>peak</td>
                <td>top</td>
                <td>average</td>
                <td>bottom</td>

                <!-- 127-12 -->
                <td>peak</td>
                <td>top</td>
                <td>average</td>
                <td>bottom</td>

                <!-- 127-13 -->
                <td>peak</td>
                <td>top</td>
                <td>average</td>
                <td>bottom</td>

                <!-- 127-14 -->
                <td>peak</td>
                <td>top</td>
                <td>average</td>
                <td>bottom</td>

                <!-- 128-1 -->
                <td>peak</td>
                <td>top</td>
                <td>average</td>
                <td>bottom</td>

                <!-- 128-2 -->
                <td>peak</td>
                <td>top</td>
                <td>average</td>
                <td>bottom</td>

                <!-- 128-3 -->
                <td>peak</td>
                <td>top</td>
                <td>average</td>
                <td>bottom</td>

                <!-- 128-4 -->
                <td>peak</td>
                <td>top</td>
                <td>average</td>
                <td>bottom</td>
            </tr>
        </thead>
EOF;

        return $tHead;
    }

    protected function createExcelTBody(array $data)
    {
        $tBody = <<<EOF
        <tbody>
            <tr>
                <!-- 日期 -->
                <td>2021-11-12</td>
                
                <!-- 127-9 -->
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                
                <!-- 127-10 -->
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>

                <!-- 127-11 -->
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>

                <!-- 127-12 -->
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>

                <!-- 127-13 -->
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>

                <!-- 127-14 -->
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>

                <!-- 128-1 -->
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>

                <!-- 128-2 -->
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>

                <!-- 128-3 -->
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>

                <!-- 128-4 -->
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>

            </tr>
        </tbody>    
EOF;
        return $tBody;
    }
}