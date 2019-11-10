<?php
if (!function_exists('getShortBranchName')) {
    function getShortBranchName($branch) {
        if (str_contains($branch, 'Thủ Đức')) {
            return "Thủ Đức";
        }
        return "Quận 3";
    }
}
if (!function_exists('getShortTimeFrame')) {
    function getShortTimeFrame($timeFrame) {
        if (str_contains($timeFrame, '9:30')) {
            return "9:30 - 10:30 am";
        }
        else if (str_contains($timeFrame, '2:30')) {
            return "2:30 - 3:30 pm";
        }
        else if (str_contains($timeFrame, '5:30')) {
            return "5:30 - 6:30 pm";
        }
        return;
    }
}
if (!function_exists('branch')) {
    function branch() {
        return [
            '1' => [
                'full' => 'CN Quận 3: Lầu 4, 512 Lê Văn Sỹ, P. 14, Q.3, TP. HCM',
                'short' => 'Thủ Đức'
            ],
            '2' => [
                'full' => 'CN Quận Thủ Đức: 6/10 Linh Trung, P. Linh Trung, Q. Thủ Đức, HCM',
                'short' => 'Quận 3'
            ]
        ];
    }
}
if (!function_exists('timeFrame')) {
    function timeFrame() {
        return [
            '1' => [
                'full' => 'Sáng: 9:30 - 10:30 am',
                'short' => '9:30 - 10:30 am',
                'start' => '09:30',
                'end' => '10:30',
                'apm' => 'am',
                'duration' => '1'
            ],
            '2' => [
                'full' => 'Chiều: 2:30 - 3:30 pm',
                'short' => '2:30 - 3:30 pm',
                'start' => '02:30',
                'end' => '03:30',
                'apm' => 'pm',
                'duration' => '1'
            ],
            '3' => [
                'full' => 'Tối: 5:30 - 6:30 pm',
                'short' => '5:30 - 6:30 pm',
                'start' => '05:30',
                'end' => '06:30',
                'apm' => 'pm',
                'duration' => '1'
            ]
        ];
    }
}
if (!function_exists('getDayOfWeek')) {
    function getDayOfWeek($dayNumber, $short=null, $lang=null) {
        if (\Session::has('locale')) {
            $lang = Session::get('locale');
        }
        if (!isset($lang) || $lang === null) {
            $lang = 'vi';
        }
        if (!isset($short) || $short === null) {
            $short = false;
        }
        $arrDays = [];
        switch ($lang)
        {
            case 'vi':
                if ($short) {
                    $arrDays = ['CN', 'Th 2', 'Th 3', 'Th 4', 'Th 5', 'Th 6', 'Th 7'];
                }
                else {
                    $arrDays = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy'];
                }
                break;
            case 'en':
                if ($short) {
                    $arrDays = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
                }
                else {
                    $arrDays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                }
                break;
            default:
                break;
        }
        return $arrDays[$dayNumber-1];
    }
}
if (!function_exists('arrDateTime')) {
    function arrDateTime($dateTime) {
        $arrDateTime = [];
        $arrDateTime['full'] = $dateTime;
        $exp = explode(' ', $dateTime);
        $exp_date = explode('-', $exp[0]);
        $arrDateTime['fulldate'] = $exp[0];
        $dayNumber = date("N", strtotime($dateTime));
        $arrDateTime['dayNumber'] = $dayNumber;
        $arrDateTime['day'] = getDayOfWeek($dayNumber);
        $arrDateTime['year'] = $exp_date[0];
        $arrDateTime['month'] = $exp_date[1];
        $arrDateTime['date'] = $exp_date[2];
        if (isset($exp[1])) {
            $exp_time = explode(':', $exp[1]);   
            $arrDateTime['fulltime'] = $exp[1];
            $arrDateTime['hour'] = $exp_time[0];
            $arrDateTime['minute'] = $exp_time[1];
            $arrDateTime['second'] = $exp_time[2];
        }

        return $arrDateTime;
    }
}

if (!function_exists('cutString')) {
    function cutString($str, $numberWord) {
        $arr = explode(' ' , $str);
        if (count($arr)>$numberWord) {
            $newStr = '';
            for ($i=0; $i<=$numberWord; $i++) {
                $newStr .= $arr[$i].' ';
            }
            $newStr .= '...';    
            return $newStr;
        }

        return $str;  
    }
}
if (!function_exists('addDayswithdate')) {
    function addDaysWithDate($date, $numberDays) {
        $date = strtotime("+".$numberDays." days", strtotime($date));
        
        return  date("Y-m-d", $date);
    }   
}
if (!function_exists('send_email')) {
    function send_email($mailTemplate, $emailData, $mailSubject, $toName, $toEmail) {
        Mail::send($mailTemplate, $emailData, function($message) use ($toName, $toEmail, $mailSubject) {
            $message->to($toEmail, $toName)
                    ->subject($mailSubject);
            $message->from($_ENV['MAIL_USERNAME'], 'TOUCHIE FEELIE');
        });
    }
}
