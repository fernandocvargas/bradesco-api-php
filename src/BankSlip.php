<?php
namespace BradescoApi;

use BradescoApi\Http\Resource;
use BradescoApi\Helpers\Fixer;

class BankSlip extends Resource
{
    public static function create(array $data, string $endpoint = null, bool $fix = true)
    {
        if ($fix) {
            Fixer::fixAll($data);
        }

        $response = parent::create($data, $endpoint);

        return $response;
    }
}
