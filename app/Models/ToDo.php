<?php

namespace App\Models;

use Database\Factories\ToDoFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ToDo extends Model
{
    /** @use HasFactory<ToDoFactory> */
    use HasFactory;
    use SoftDeletes;

    public const ID = 'id';

    public const USER_ID = 'user_id';

    public const TITLE = 'title';

    public const DESCRIPTION = 'description';

    public const TO_BE_DONE_ON = 'to_be_done_on';

    public const TO_BE_DONE_AT = 'to_be_done_at';

    public const STATUS = 'status';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    protected $fillable = [
        self::USER_ID,
        self::TITLE,
        self::DESCRIPTION,
        self::TO_BE_DONE_ON,
        self::TO_BE_DONE_AT,
        self::STATUS,
    ];

    protected $table = 'todos';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
