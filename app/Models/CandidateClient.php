<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateClient extends Model
{
    use HasFactory;

    protected $table = 'candidate_clients';
    protected $primaryKey = 'id';
}
