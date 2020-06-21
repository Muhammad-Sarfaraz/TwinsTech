<?php


namespace TwinsTech\Helpers;

use Illuminate\Support\Carbon;

class DateHelper
{
     /**
     * @param $current_time;
     */
    protected $current_time;

    /**
     * @param $format;
     */
    protected $format = "h:i:s";

    
    /**
     * DateHelper constructor.
     * / * created by sarfaraz * /
     * @param Illuminate\Support\Carbon $current_timerequest
     */


    public function __construct(Carbon $carbon)
    {
        $this->current_time = $carbon::now();
    }



    public static function current_date()
    {
        $carbon=new Carbon();
        $curren_date    = $carbon::now();
        $formatted_date = self::date_format_month($curren_date);

        return $formatted_date;
    }

    public static function date_format_month($current_date)
    {
        $format = Carbon::parse($current_date)->format('d F y');

        return $format;
    }

    public function current_clock(){

        $clock = $this->current_time->format($this->format);
        return $clock;
    }

    public function server_time(){

    }


   /**
     * Get the difference between two dates as a \DateInterval object
     *
     * @param \DateTime $dateA
     * @param \DateTime $dateB
     * @return \DateInterval
     */
    public function diff_of_date($dateA, $dateB)
    {
        return $dateA->diff($dateB);
    }



   /**
     * Get the day of month of a date
     *
     * @param \DateTimeInterface $dateTime
     * @return integer The day of month of the given date
     */
    public function dayOfMonth(\DateTimeInterface $dateTime)
    {
        return (integer)$dateTime->format('d');
    }
        /**
     * Get the month of a date
     *
     * @param \DateTimeInterface $dateTime
     * @return integer The month of the given date
     */
    public function month(\DateTimeInterface $dateTime)
    {
        return (integer)$dateTime->format('m');
    }

    /**
     * Get the year of a date
     *
     * @param \DateTimeInterface $dateTime
     * @return integer The year of the given date
     */
    public function year(\DateTimeInterface $dateTime)
    {
        return (integer)$dateTime->format('Y');
    }
}
