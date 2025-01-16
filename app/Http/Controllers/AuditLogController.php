<?php

namespace App\Http\Controllers;  
  
use App\Models\AuditLog;  

class AuditLogController extends Controller  
{  
    public function index()  
    {  
        $auditLogs = AuditLog::with('user')->get(); // Mengambil log dengan relasi pengguna  
        return view('audit_logs.index', compact('auditLogs'));  
    }  
}  
