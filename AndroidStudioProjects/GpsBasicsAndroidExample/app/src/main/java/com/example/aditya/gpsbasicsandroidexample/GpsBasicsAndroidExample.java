package com.example.aditya.gpsbasicsandroidexample;

import android.content.Context;
import android.location.Location;
import android.location.LocationManager;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
public class GpsBasicsAndroidExample extends AppCompatActivity {

        private LocationManager locationManager;

        @Override
        protected void onCreate(Bundle savedInstanceState) {

            super.onCreate(savedInstanceState);
            setContentView(R.layout.activity_gps_basics_android_example);
            locationManager = (LocationManager) getSystemService(Context.LOCATION_SERVICE);
            locationManager.requestLocationUpdates( LocationManager.GPS_PROVIDER,
                    3000, 10, this);

            /********* After registration onLocationChanged method  ********/
            /********* called periodically after each 3 sec ***********/
        }

        /************* Called after each 3 sec **********/
        @Override
        public void onLocationChanged(Location location) {

            String str = "Latitude: "+location.getLatitude()+"
            Longitude: "+location.getLongitude();

            Toast.makeText(getBaseContext(), str, Toast.LENGTH_LONG).show();
        }

        @Override
        public void onProviderDisabled(String provider) {

            /******** Called when User off Gps *********/

            Toast.makeText(getBaseContext(), "Gps turned off ", Toast.LENGTH_LONG).show();
        }

        @Override
        public void onProviderEnabled(String provider) {

            /******** Called when User on Gps  *********/

            Toast.makeText(getBaseContext(), "Gps turned on ", Toast.LENGTH_LONG).show();
        }

        @Override
        public void onStatusChanged(String provider, int status, Bundle extras) {
            // TODO Auto-generated method stub

        }
    }