<?php

/*
 * This file is part of the ChartBundle package.
 *
 * (c) Simcao <dev@simcao.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace TheYellowDev\ChartBundle;

use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

/**
 * @author Simcao <dev@simcao.com>
 */
class ChartManager
{

    private ChartEntity $chart;

    public function __construct(string $chartType = Chart::TYPE_BAR)
    {
        $this->chart = new ChartEntity($chartType);
    }

    public function addLabels(array $labels): self
    {
        $this->chart->setLabels($labels);

        return $this;
    }

    public function addDataset(string $label, array $data, string $backgroundColor = '', string $borderColor = ''): self
    {
        $this->chart->addDataset($label, $data, $backgroundColor, $borderColor);

        return $this;
    }


    public function createChart(): Chart
    {
        return $this->chart->getChart();
    }
}