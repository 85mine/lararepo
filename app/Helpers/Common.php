<?php

namespace App\Helpers;

class Common
{
    /**
     * @param $request
     * @param $type : MESSAGE_STATUS_ERROR|MESSAGE_STATUS_WARNING|MESSAGE_STATUS_SUCCESS
     * @param $messages
     */
    public static function setMessage($request, $type, $messages)
    {
        $request->session()->flash('alertMsg', view('errors.message')->with([
            'type' => $type,
            'messages' => $messages,
        ])->render());
    }

    /**
     * @param $request
     * @return $message
     */
    public static function getMessage($request)
    {
        $message = null;
        if ($request->session()->has('alertMsg')) {
            $message = $request->session()->get('alertMsg');
        }

        return $message;
    }
}