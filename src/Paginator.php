<?php

namespace Paginator;

use Zend\Paginator\Paginator as ZendPaginator;


class Paginator extends ZendPaginator
{

    /**
     * Total item count
     *
     * @var int
     */
    protected $totalItemCount;


    /**
     * Returns the total number of items available.
     *
     * @return int
     */
    public function getTotalItemCount()
    {
        if (null === $this->totalItemCount) {
            $this->totalItemCount = count($this->getAdapter());
        }
        return $this->totalItemCount;
    }

    /**
     * Sets total item count
     *
     * @param int $totalItemCount
     * @return \Paginator\Paginator
     */
    public function setTotalItemCount($totalItemCount)
    {
        $this->totalItemCount = $totalItemCount;

        return $this;
    }

    /**
     * Calculates the page count.
     *
     * @return int
     */
    protected function _calculatePageCount()
    {
        return (int) ceil($this->getTotalItemCount() / $this->getItemCountPerPage());
    }

}
