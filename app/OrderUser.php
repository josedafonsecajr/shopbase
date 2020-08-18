<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderUser extends Model
{

    protected $table ='orders_user';

    /**
     * This attribute that are mass assignable
     * @var string[]
     */
    protected $fillable = ['reference', 'pagseguro_code', 'pagseguro_status'];

    /**
     * This method makes the 1: N relationship with the itens_order table
     * Este metodo faz o relacionamento  de 1 : N com a tabela itens_order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function itens()
    {
        return $this->hasMany(ItemOrder::class);
    }

    /**
     * This method makes the 1: N relationship with the user table
     * Este metodo faz o relacionamento  de 1 : N com a tabela user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
