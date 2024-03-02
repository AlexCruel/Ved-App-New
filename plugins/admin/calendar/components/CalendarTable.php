<?php namespace Admin\Calendar\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\DB;

/**
 * CalendarTable Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class CalendarTable extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Календарь событий',
            'description' => 'Отображает календарь в виде таблицы'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['month'] = date('F');
        $this->page['monthRU'] = $this->changeLangMonth($this->page['month']);
        $this->page['year'] = date('Y');
        $this->page['nextYear'] = date('Y', strtotime('+1 year'));

        $this->page['events'] = $this->getEvents($this->page['month'], $this->page['year']);
        $this->page['eventsCount'] = count($this->page['events']);
    }

    public function onSelectMonthYear()
    {
        $this->page['month'] = input('selectMonth');
        $this->page['monthRU'] = $this->changeLangMonth($this->page['month']);
        $this->page['year'] = input('selectYear');

        $this->page['events'] = $this->getEvents($this->page['month'], $this->page['year']);
        $this->page['eventsCount'] = count($this->page['events']);

        return ['#month' => $this->page['monthRU'], '#year' => $this->page['year']];
    }

    public function getEvents($month, $year)
    {
        $events = DB::table('admin_calendar_tags_events_view')
            ->where(DB::raw('YEAR(`date_reserv`)'), '=', $year)
            ->where(DB::raw('MONTHNAME(`date_reserv`)'), '=', $month)
            ->select('date_reserv', 'tag_name')
            ->get();

        // change date format
        foreach ($events as $event)
        {
            $event->date_reserv = date("d.m.y H:i", strtotime($event->date_reserv));
        }

        return $events;
    }

    public function changeLangMonth($month)
    {
        switch ($month)
        {
            case 'January':
                return 'Январь';
            case 'February':
                return 'Февраль';
            case 'March':
                return 'Март';
            case 'April':
                return 'Апрель';
            case 'May':
                return 'Май';
            case 'June':
                return 'Июнь';
            case 'July':
                return 'Июль';
            case 'August':
                return 'Август';
            case 'September':
                return 'Сентябрь';
            case 'October':
                return 'Октябрь';
            case 'November':
                return 'Ноябрь';
            case 'December':
                return 'Декабрь';
            default:
                return 'Январь';
        }
    }
}
