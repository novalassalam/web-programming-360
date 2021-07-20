#include <Arduino.h>
#include <ESP8266WiFi.h>
#include <ESP8266WiFiMulti.h>
#include <ESP8266HTTPClient.h>
#include <MQ2.h>

#define USE_SERIAL Serial
 
ESP8266WiFiMulti WiFiMulti;
 
HTTPClient http;
String payload;
String stat;
// Buat object dht
int pinAout = A0;
int lpg_gas, co_gas, smoke_gas;
MQ2 mq2(pinAout);
const int sensorPin = 13; 
// isi dengan alamat ip anda dan folder project anda
String url = "http://192.168.43.74/web-programming-360/sensor?lpg_gas=";
void setup() {
    Serial.begin(9600);
    mq2.begin();
    delay(1000);
 
    USE_SERIAL.begin(115200);
    USE_SERIAL.setDebugOutput(false);
 
    for(uint8_t t = 4; t > 0; t--) {
        USE_SERIAL.printf("[SETUP] Tunggu %d...\n", t);
        USE_SERIAL.flush();
        delay(1000);
    }
 
    WiFi.mode(WIFI_STA);
    WiFiMulti.addAP("rizal", ""); // Sesuaikan SSID dan password ini
    
}
void loop() {
     float* values= mq2.read(true); //jika diset "false" tidak akan dimunculkan di serial monitor
     lpg_gas = mq2.readLPG();
     co_gas = mq2.readCO();
     smoke_gas = mq2.readSmoke();
     int bacasensor = digitalRead(sensorPin);
    if (isnan(lpg_gas) || isnan(co_gas) || isnan(smoke_gas)) {
      Serial.println("Sensor DHT 11 Tidak terditeksi");
      delay(100);     
    }
    if((WiFiMulti.run() == WL_CONNECTED)) {
        // Tambahkan nilai kepekatan asap, suhu, dan kelembapan pada URL yang sudah kita buat
        USE_SERIAL.print("[HTTP] Memulai...\n");
        http.begin( url  +  (String) lpg_gas + "&co_gas=" + (String) co_gas + "&smoke_gas=" + (String) smoke_gas); 
        Serial.println(url);
        Serial.println(lpg_gas);
        Serial.println(co_gas);
        Serial.println(smoke_gas);
        // Mulai koneksi dengan metode GET
        USE_SERIAL.print("[HTTP] Melakukan GET ke server...\n");
        int httpCode = http.GET();

        // Periksa httpCode, akan bernilai negatif kalau error
        if(httpCode > 0) {
            
            // Tampilkan response http
            USE_SERIAL.printf("[HTTP] kode response GET: %d\n", httpCode);
 
            // Bila koneksi berhasil, baca data response dari server
            if(httpCode == HTTP_CODE_OK) {
                payload = http.getString();
                USE_SERIAL.println(payload);
            }
 
        } else {
            USE_SERIAL.printf("[HTTP] GET gagal, error: %s\n", http.errorToString(httpCode).c_str());
        }
 
        http.end();
        
        delay(1000);
         
    } else {
      USE_SERIAL.println("WiFi tidak terkoneksi, reconnect...");
      WiFi.mode(WIFI_STA);
       WiFiMulti.addAP("rizal", ""); // Sesuaikan SSID dan password ini
    }

    
 
    delay(4000);
}
