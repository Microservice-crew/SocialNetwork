<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reclamation;

class ChartController extends Controller
{
    public function pieChart()
    {
        $technicalProblemCount = $this->countReclamationsByType(Reclamation::TYPE_PROBLEME_TECHNIQUE);
        $inappropriateContentCount = $this->countReclamationsByType(Reclamation::TYPE_CONTENU_INAPPROPRIE);
        $harassmentCount = $this->countReclamationsByType(Reclamation::TYPE_HARCELEMENT);

        return view('pie', compact('technicalProblemCount', 'inappropriateContentCount', 'harassmentCount'));
    }

    public function countReclamationsByType($type)
    {
        $count = Reclamation::where('type', $type)->count();
        return $count;
    }
}