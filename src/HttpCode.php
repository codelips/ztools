<?php

namespace Ztools;

class HttpCode
{
    // [Informational 1xx]
    const CONTINUE = 100;
    const SWITCHING_PROTOCOLS = 101;
    const PROCESSING = 102;
    const EARLY_HINTS = 103;

    // [104-199] Unassigned

    // [Successful 2xx]
    const OK = 200;
    const CREATED = 201;
    const ACCEPTED = 202;
    const NON_AUTHORITATIVE_INFORMATION = 203;
    const NO_CONTENT = 204;
    const RESET_CONTENT = 205;
    const PARTIAL_CONTENT = 206;
    const MULTI_STATUS = 207;
    const ALREADY_REPORTED = 208;

    // [209-225] Unassigned
    const IM_USED = 226;
    // [227-299] Unassigned

    // [Redirection 3xx]
    const MULTIPLE_CHOICES = 300;
    const MOVED_PERMANENTLY = 301;
    const FOUND = 302;
    const SEE_OTHER = 303;
    const NOT_MODIFIED = 304;
    const USE_PROXY = 305;
    const UNUSED = 306;
    const TEMPORARY_REDIRECT = 307;
    const PERMANENT_REDIRECT = 308;

    // [309-399] Unassigned

    // [Client Error 4xx]
    const BAD_REQUEST = 400;
    const UNAUTHORIZED  = 401;
    const PAYMENT_REQUIRED = 402;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const METHOD_NOT_ALLOWED = 405;
    const NOT_ACCEPTABLE = 406;
    const PROXY_AUTHENTICATION_REQUIRED = 407;
    const REQUEST_TIMEOUT = 408;
    const CONFLICT = 409;
    const GONE = 410;
    const LENGTH_REQUIRED = 411;
    const PRECONDITION_FAILED = 412;
    const REQUEST_ENTITY_TOO_LARGE = 413;
    const REQUEST_URI_TOO_LONG = 414;
    const UNSUPPORTED_MEDIA_TYPE = 415;
    const REQUESTED_RANGE_NOT_SATISFIABLE = 416;
    const EXPECTATION_FAILED = 417;

    // [418-420] Unassigned

    const MISDIRECTED_REQUEST = 421;
    const UNPROCESSABLE_ENTITY = 422;
    const LOCKED = 423;
    const FAILED_DEPENDENCY = 424;
    const TOO_EARLY = 425;
    const UPGRADE_REQUIRED = 426;
    // [427] Unassigned
    const PRECONDITION_REQUIRED = 428;
    const TOO_MANY_REQUESTS = 429;
    // [427] Unassigned
    const REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    // [432-450] Unassigned
    const UNAVAILABLE_FOR_LEGAL_REASONS = 451;
    // [452-499] Unassigned


    // [Server Error 5xx]
    const INTERNAL_SERVER_ERROR = 500;
    const NOT_IMPLEMENTED = 501;
    const BAD_GATEWAY = 502;
    const SERVICE_UNAVAILABLE = 503;
    const GATEWAY_TIMEOUT = 504;
    const VERSION_NOT_SUPPORTED = 505;
    const VARIANT_ALSO_NEGOTIATES = 506;
    const INSUFFICIENT_STORAGE = 507;
    const LOOP_DETECTED = 508;
    // [509] Unassigned
    const NOT_EXTENDED = 510;
    const NETWORK_AUTHENTICATION_REQUIRED = 511;

    // [512-599] Unassigned


    /**
     * Checks whether a status code can be considered successful.
     *
     * @param $code
     * @return bool
     */
    public static function isSuccessful($code)
    {
        switch ($code) {
            case self::OK:
            case self::CREATED:
            case self::ACCEPTED:
            case self::NON_AUTHORITATIVE_INFORMATION:
            case self::NO_CONTENT:
            case self::RESET_CONTENT:
            case self::PARTIAL_CONTENT:
            case self::MULTI_STATUS;
            case self::ALREADY_REPORTED;
                return true;
            default:
                return false;
        }
    }
}
