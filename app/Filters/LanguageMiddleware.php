<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class LanguageMiddleware implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        if (!$session->has('lang')) {
            $session->set('lang', 'id'); // Default ke Indonesia
        }

        $lang = $session->get('lang');
        service('request')->setLocale($lang);

        log_message('debug', 'Middleware berjalan! Bahasa saat ini: ' . service('request')->getLocale());
    }


    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak ada aksi setelah request
    }
}
