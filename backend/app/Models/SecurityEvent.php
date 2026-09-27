<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class SecurityEvent extends Model { protected $fillable = ['event_type', 'source_ip', 'severity', 'payload']; }
