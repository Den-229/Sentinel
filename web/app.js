function quarantineIP() {
    const alert = document.getElementById('quarantine-status');
    alert.style.display = 'block';
    alert.innerHTML = '🛡️ IP 198.51.100.44 bannie avec succès du pare-feu & règles iptables mises à jour !';
}
