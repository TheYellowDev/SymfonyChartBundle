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

use Symfony\UX\Chartjs\Builder\ChartBuilder;
use Symfony\UX\Chartjs\Model\Chart;

/**
 * ChartEntity used to create the
 * Chart object.
 *
 * @author Simcao <dev@simcao.com>
 */
class ChartEntity
{
    /**
     * @var Chart
     */
    private Chart $chart;

    /**
     * @var array
     */
    private array $labels = [];

    /**
     * @var array
     */
    private array $datasets = [];

    /**
     * Constructor.
     *
     * @param string $chartType
     */
    public function __construct(string $chartType = Chart::TYPE_BAR)
    {
        $this->chart = (new ChartBuilder())->createChart($chartType);
    }

    /**
     * Set labels for X axis of the chart.
     *
     * @param array $labels
     * @return $this
     */
    public function setLabels(array $labels): self
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Add a dataset to the chart.
     *
     * @param string $label
     * @param array $data
     * @param string $backgroundColor
     * @param string $borderColor
     * @return $this
     */
    public function addDataset(string $label, array $data, string $backgroundColor = 'black', string $borderColor = 'black'): self
    {
        $this->datasets[] = (new ChartDataset)
            ->setLabel($label)
            ->setData($data)
            ->setBackgroundColor($backgroundColor)
            ->setBorderColor($borderColor)
            ->getDataset()
        ;

        return $this;
    }

    public function getChart(): Chart
    {
        $this->chart->setData([
            'labels' => $this->labels,
            'datasets' => $this->datasets,
        ]);

        return $this->chart;
    }
}