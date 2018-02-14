<?php

namespace TelegramBot\Types;

/**
 * Represents a photo to be sent.
 */
class InputMediaPhoto
{
    /** @var string Type of the result, must be photo */
    public $type;

    /** @var string File to send.
     * Pass a file_id to send a file that exists on the Telegram servers (recommended),
     * pass an HTTP URL for Telegram to get a file from the Internet,
     * or pass "attach://<file_attach_name>" to upload a new one using multipart/form-data under <file_attach_name> name.
     * More info on Sending Files » https://core.telegram.org/bots/api#sending-files
     */
    public $media;

    /** @var string Optional. Caption of the photo to be sent, 0-200 characters */
    public $caption;

}