<?php

class Pagination
{
	public $tot_results = 0;
	public $perPaging = 10;
	public $results_per_page = 1;
	public $current_page = 1;
	public $tot_pages = 1;
	public $current_result_start = 0;
	public $current_result_end = 0;
	public $nextPage = 0;
	public $lastPage = 0;
	public $beginPaging = 0;
	public $endPaging = 0;
	public $pagerSize = 3;
	
	public function __construct ($current_page = 1, $tot_results = 0, $results_per_page = 1, $perPaging = 10)
	{
		$this->current_page = $current_page;
		$this->tot_results = $tot_results;
		$this->results_per_page = $results_per_page;
		$this->perPaging = $perPaging;
		
		$this->setCurrentPage();
		$this->setTotalResults();
		$this->setResultsPerPage();
		$this->calculate();
		$this->getNextPage();
		$this->getLastPage();
		$this->getBeginPaging();
		$this->getEndPaging();
   }
	
	function getNextPage()
	{
		$this->nextPage = $this->current_page + 1;
		if ($this->nextPage > $this->tot_pages)
			$this->nextPage = $this->tot_pages;
	}
	
	function getLastPage()
	{
		$this->lastPage = $this->current_page - 1;
		if ($this->lastPage < 1)
			$this->lastPage = 1;
	}
	
	function getBeginPaging()
	{
		$this->pagerSize = intval($this->perPaging / 2);
		$pagerStart = $this->current_page - $this->pagerSize;
		$pagerLeft = $this->tot_pages - $this->perPaging + 1;
		if ($pagerStart > 0)
		{
			if ($pagerStart >= $pagerLeft)
				$this->beginPaging = $pagerLeft;
			else
				$this->beginPaging = $pagerStart;
		}
		else
		{
			$this->beginPaging = 1;
		}
	}
	
	function getEndPaging()
	{
		$this->pagerSize = intval($this->perPaging / 2);
		$pagerEnd = $this->current_page + $this->pagerSize;
		if ($pagerEnd >= $this->tot_pages)
		{
			$this->endPaging = $this->tot_pages;
		}
		else if ($pagerEnd <= $this->perPaging)
		{
			$this->endPaging = $this->perPaging;
		}
		else
		{
			$this->endPaging = $pagerEnd;
		}
	}
		
	function setTotalResults()
	{
		if ($this->tot_results < 0)
			$this->tot_results = 0;
	}

	function setResultsPerPage() 
  {
		if ($this->results_per_page < 1)
			$this->results_per_page = 1;
	}

	function setCurrentPage()
  {
		if ($this->current_page < 1) {
			$this->current_page = 1;
		}
  }

	function calculate()
	{
		if ($this->tot_results == 0) {
		    $this->tot_pages = 1;
		    $this->current_page = 1;
		    $this->current_result_start = 0;
		    $this->current_result_end = 0;
		    return;
		}
		
		$this->tot_pages = (int)($this->tot_results / $this->results_per_page);
		if (($this->tot_results % $this->results_per_page) != 0) {
		    $this->tot_pages++;
		}
		
		if ($this->current_page > $this->tot_pages) {
		    $this->current_page = $this->tot_pages;
		}
		
		$result_end = $this->results_per_page * $this->current_page;
		if ($result_end > $this->tot_results) {
		    $this->current_result_end = $this->tot_results;
		} else {
		    $this->current_result_end = $result_end;
		}
		
		$this->current_result_start = $result_end - $this->results_per_page;
	}
}

?> 