package com.example.aditya.myapplication;
import android.app.Activity;
import android.content.Context;
import android.location.Location;
import android.location.LocationListener;
import android.location.LocationManager;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.Toast;
public class LbsGeocodingActivity extends Activity{
private static final long MINIMUM_DISTANCE_CHANGE_FOR_UPDATES = 1; // in Meters
private static final long MINIMUM_TIME_BETWEEN_UPDATES = 1000; // in Millisecond
protected LocationManager locationManager;
    protected Button retrieveLocationButton;
    @Override
    public void onCreate(Bundle savedInstanceState){
    super.onCreate(savedInstanceState);
    setContentView(R.layout.main);
        retrieveLocationButton = (Button) findViewById(R.id.retrieve_location_button);
        locationManager = (LocationManager) getSystemService(Context.LOCATION_SERVICE);
        locationManager.requestLocationUpdates(
        LocationManager.GPS_PROVIDER,MINIMUM_TIME_BETWEEN_UPDATES,MINIMUM_DISTANCE_CHANGE_FOR_UPDATES,new MyLocationListener());
        retrieveLocationButton.setOnClickListener(new OnClickListener() {
            @Override
            public void onClick(View v) {
                showCurrentLocation();
            }});
    }
    protected void showCurrentLocation() {
        Location location = locationManager.getLastKnownLocation(LocationManager.GPS_PROVIDER);
        if (location != null) {
            String message = String.format("Current Location \n Longitude: %1$s \n Latitude: %2$s",location.getLongitude(), location.getLatitude());
            58	            Toast.makeText(LbsGeocodingActivity.this, message,
                    59	                    Toast.LENGTH_LONG).show();
            60	        }
        61
        62	    }
    63
            64	    private class MyLocationListener implements LocationListener {
        65
                66	        public void onLocationChanged(Location location) {
            67	            String message = String.format(
                    68	                    "New Location \n Longitude: %1$s \n Latitude: %2$s",
                    69	                    location.getLongitude(), location.getLatitude()
                    70	            );
            71	            Toast.makeText(LbsGeocodingActivity.this, message, Toast.LENGTH_LONG).show();
            72	        }
        73
                74	        public void onStatusChanged(String s, int i, Bundle b) {
            75	            Toast.makeText(LbsGeocodingActivity.this, "Provider status changed",
                    76	                    Toast.LENGTH_LONG).show();
            77	        }
        78
                79	        public void onProviderDisabled(String s) {
            80	            Toast.makeText(LbsGeocodingActivity.this,
                    81	                    "Provider disabled by the user. GPS turned off",
                    82	                    Toast.LENGTH_LONG).show();
            83	        }
        84
                85	        public void onProviderEnabled(String s) {
            86	            Toast.makeText(LbsGeocodingActivity.this,
                    87	                    "Provider enabled by the user. GPS turned on",
                    88	                    Toast.LENGTH_LONG).show();
            89	        }
        90
                91	    }
    92
            93	}

