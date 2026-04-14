<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProcedureFile extends Model
{
    protected $table = 'procedure_files';
    protected $primaryKey = 'procedure_file_id';
    protected $fillable = [
        'appointment_id',
        'file_name',
        'file_type'
    ];
    
    // --- Relationships ---
    public function appointment() {
        return $this->belongsTo(Appointment::class, 'appointment_id', 'appointment_id');
    }
}
