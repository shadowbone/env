<?php

namespace Modules\Frontend\Controllers;

use View,
    Auth,
    Html,
    Form,
    Setting;
use Modules\Frontend\Models\DashboardModel;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    protected $_view = 'frontend::dashboard';

    public function __construct()
    {
        view()->share('_view', $this->_view);
    }

    public function getIndex()
    {
        $this->data['infoUsers'] = DashboardModel::all();
        $this->data['title'] = 'Ini Judul';
        return view($this->_view . '/index', $this->data);
    }

}
