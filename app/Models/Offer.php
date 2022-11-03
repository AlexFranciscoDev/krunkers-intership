<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Offer extends Model
{
    public function offersCompany() {
        return $this->join('companies', 'offers.idCompany', '=', 'companies.idCompany')->get();
    }

    public function scopeKeyword($query, $keyword) {
        return $query->join('companies', 'offers.idCompany', '=', 'companies.idCompany')->where('name', 'LIKE',  '%'.$keyword.'%')->get();
    }

    // Order filter
    public function scopeOrder($query, $order) {
        // If order is empty set desc by default
        if (empty($order)) {
            $order = "desc";
        }
        return $query->orderBy('created_at', $order);
    }

    // Filter by date
    public function scopeDate($query, $datePublication) {
        $filterDate = "";
        switch ($datePublication) {
            case "anyDate":
                $filterDate = '1800-01-01'; // Set old date to display all offers
                break;
            case "24hours":
                $filterDate = Carbon::yesterday();
                break;
            case "lastWeek":
                $filterDate = Carbon::now()->subWeek();
                break;
            case "lastMonth":
                $filterDate = Carbon::now()->subMonth();
                break;
        }
        return $query->where('created_at', '>=', $filterDate);
    }

    // Filter by typeWorkday
    public function scopeTypeWorkday($query, $typeWorkday) {
        return $query->where('typeWorkday', '=', $typeWorkday);
    }

    // Filter by area
    public function scopeArea($query, $area) {
        return $query->whereIn('area', $area);
    }

    // Filter by city
    public function scopeCity($query, $city) {
        // If city it's empty, return all offers
        if (empty($city)) {
            return $query->get();
        }
        return $query->whereIn('city', $city);
    }

    // Crear nueva oferta
    public function newOffer ($name, $description, $area, $city, $typeWorkday, $requirements) {
        $offer = new Offer();
        $offer->name = $name;
        $offer->description = $description;
        $offer->area = $area;
        $offer->city = $city;
        $offer->typeWorkday = $typeWorkday;
        $offer->requirements = $requirements;
        // $new->datePublication = Carbon::now()->format("d-m-Y");
        $offer->status = "activo";
        $offer->idCompany = 1;
        return $offer->save();
    }

    public function scopeOfferDescription($query, $idoffer) {
        return $query->join('companies', 'offers.idCompany', '=', 'companies.idCompany')->where('idOffer', '=', $idoffer);
    }
}
