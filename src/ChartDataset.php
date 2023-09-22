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

/**
 * Dataset object used to manage data
 * for ChartJS.
 *
 * @author Simcao <dev@simcao.com>
 */
class ChartDataset
{
    private ?string $label = null;

    private string $backgroundColor = 'black';

    private string $borderColor = 'black';

    private array $data = [];

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return ChartDataset
     */
    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return string
     */
    public function getBackgroundColor(): string
    {
        return $this->backgroundColor;
    }

    /**
     * @param string $backgroundColor
     * @return ChartDataset
     */
    public function setBackgroundColor(string $backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    /**
     * @return string
     */
    public function getBorderColor(): string
    {
        return $this->borderColor;
    }

    /**
     * @param string $borderColor
     * @return ChartDataset
     */
    public function setBorderColor(string $borderColor): self
    {
        $this->borderColor = $borderColor;

        return $this;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return ChartDataset
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getDataset(): array
    {
        return [
            'label' => $this->label,
            'backgroundColor' => $this->backgroundColor,
            'borderColor' => $this->borderColor,
            'data' => $this->data,
        ];
    }
}