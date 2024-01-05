<?php

namespace App\Traits;

use Hashids\Hashids;

/**
 * Trait HasHashId.
 *
 * @property string $hash_id
 */
trait HasHashId
{
    /**
     * due to a phpstan problem we may not declare a return type here
     * @return string
     */
    public function getHashIdAttribute(): string
    {
        return resolve(Hashids::class)->encode($this->id);
    }

    /**
     * due to a phpstan problem we may not declare a return type here
     * @param string $hash_id
     * @return array<string>
     */
    public static function decodeHashId(string $hash_id): array
    {
        return resolve(Hashids::class)->decode($hash_id);
    }

    /**
     * @param string $hash_id
     * @return self|null
     */
    public static function findByHashId(string $hash_id): ?self
    {
        return self::find(static::decodeHashId($hash_id))->first();
    }
}
