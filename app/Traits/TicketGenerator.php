<?php
  
namespace App\Traits;

use App\Contracts\Models;

trait RandomNumber
{
    /**
     * @var transactionInterface
     */
    private $transactionInterface;

    /**
     * Account service constructor.
     * 
     * @param App\Contracts\Models\TransactionInterace $transactionInterface
     */
    public function __construct(Models\TransactionInterface $transactionInterface)
    {
        $this->transactionInterface = $transactionInterface;
    }
    /**
     * Set min number
     *
     * @var int
     */
    protected $minNumber = 0;

    /**
     * Set max number.
     *
     * @var int
     */
    protected $maxNumber = 9;

    /**
     * Set random unique id
     * 
     * @param $length
     * @var void
     */
    protected function generateUniqueId($length = 8)
    {
        $number = '';

        do {
            for ($i=$length; $i--; $i>0) {
                $number .= mt_rand($this->minNumber, $this->maxNumber);
            }
        } while ($this->checkUniqueId($number));

        return $number;
    }

    /**
     * Check unique id
     * 
     * @param $livestock, $number, $type
     * @var void
     */
    protected function checkUniqueId($number)
    {
        return $this->transactionInterface->allExist([['unique_id', $number]]);
    }
}