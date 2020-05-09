<?php declare(strict_types=1);

namespace App\Provider\UmweltbundesamtDe;

use App\Air\Measurement\CO;
use App\Air\Measurement\NO2;
use App\Air\Measurement\O3;
use App\Air\Measurement\PM10;
use App\Air\Measurement\SO2;
use App\Provider\AbstractProvider;
use App\Provider\UmweltbundesamtDe\StationLoader\UmweltbundesamtStationLoader;

class UmweltbundesamtDeProvider extends AbstractProvider
{
    const IDENTIFIER = 'uba_de';

    public function __construct(UmweltbundesamtStationLoader $umweltbundesamtStationLoader)
    {
        $this->stationLoader = $umweltbundesamtStationLoader;
    }

    public function getIdentifier(): string
    {
        return self::IDENTIFIER;
    }

    public function providedMeasurements(): array
    {
        return [
            CO::class,
            NO2::class,
            O3::class,
            PM10::class,
            SO2::class,
        ];
    }
}
