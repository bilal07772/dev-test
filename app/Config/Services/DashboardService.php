<?php

namespace Config\Services;

use CodeIgniter\Config\BaseService;

class DashboardService extends BaseService
{
    /**
     * Validates url rule existence
     * @return bool
     */
    public function checkProtectedExistence()
    {
        $request = \Config\Services::request();
        $uri = $request->uri;
        // This is simply based on specific uri match
        // Since we dont have any user login data storing anywhere.
        // Only providing access to users who access with segments dashboard/admin
        $isValid = $this->decryptNameSegment(($uri->getSegment(0)), ($uri->getSegment(1)));
        if ($isValid) {
            return true;
        } else {
            echo "Ooops ! You are accessing unauthorised area.We are redirecting you to homepage!";
            echo "<script>setTimeout(\"location.href = '" . base_url("/") . "';\",3000);</script>";
            die();

        }
    }

    /**
     * Decyrpts uri segments
     * @param $uriSeg0
     * @param $uriSeg1
     * @return bool
     */

    protected function decryptNameSegment($uriSeg0, $uriSeg1)
    {
        if (urldecode($uriSeg0) == 'dashboard' && urldecode($uriSeg1) == 'admin') {
            return true;
        } else {
            return false;
        }

    }

}