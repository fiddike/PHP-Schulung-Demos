<?php


class TableView
{
    private function renderTableHeader()
    {
        return '<table><tbody>';
    }

    private function renderTableFooter()
    {
        return '</tbody></table>';
    }

    public function renderTable($tableData)
    {
        $output = $this->renderTableHeader();
        foreach ($tableData as $rowData) {
            $row = '<td>'.$rowData[0].'</td><td>'.$rowData[0].'</td>';
            $output = $output . $row;
        }
        $output = $output . $this->renderTableFooter();

        return $output;
    }
}