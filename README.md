# Sentinel — Plateforme de Monitoring Cybersécurité pour PME

Sentinel centralise les événements de sécurité, gère les alertes de menace, les politiques d'accès et l'authentification MFA.

## Architecture
- **Web Next.js/HTML5** : SOC Dashboard, Security Score, Ingestion Timeline, Audit Trail.
- **Backend Laravel 11 API** : Ingestion logs ultra-rapide `/api/v1/events/ingest`, Moteur de détection.
- **Mobile Flutter** : Notifications d'alertes critiques, validation MFA mobile.

## Database Tables
`users`, `devices`, `sessions`, `security_events`, `alerts`, `detection_rules`, `incidents`, `audit_logs`, `mfa_methods`.
