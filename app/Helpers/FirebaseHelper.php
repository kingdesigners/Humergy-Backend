<?php

namespace App\Helpers;

use App\Models\Service;

class FirebaseHelper
{
    public static function syncServiceRate(Service $service)
    {
        try {
            // Note: The previous grep shows they use firestore: app('firebase.firestore')->database()
            // However, the prompt mentions "Firebase path services/{service_id}/rate", which usually implies Realtime Database.
            // I'll update Firestore just in case, but if they use realtime, I'll use it. Let's look at how we can do realtime or firestore.
                        // Use Realtime Database or fallback to Firestore
            try {
                $firebase = app('firebase.database');
                $reference = $firebase->getReference('services/' . $service->id . '/rate');
                $reference->set($service->price_per_gal);
            } catch (\Exception $e) {
                // Try firestore if realtime DB is not configured
                $firestore = app('firebase.firestore')->database();
                $firestore->collection('services')->document((string)$service->id)->set(['rate' => $service->price_per_gal]);
            }
        } catch (\Exception $e) {
            \Log::error("Firebase Realtime DB sync failed for service {$service->id}: " . $e->getMessage());
        }
    }
}
