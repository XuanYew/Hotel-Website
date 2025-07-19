document.getElementById('booking-form').addEventListener('submit', function(e) {
  e.preventDefault();
  const roomRate = parseFloat(document.getElementById('roomType').value);
  const checkin = new Date(this.checkin.value);
  const checkout = new Date(this.checkout.value);
  const guests = parseInt(this.guests.value);

  if (checkout <= checkin) {
    document.getElementById('booking-result').textContent = "Invalid dates.";
    return;
  }

  const days = (checkout - checkin) / (1000 * 60 * 60 * 24);
  const total = days * roomRate;
  document.getElementById('booking-result').textContent = `Total booking fee: $${total.toFixed(2)} for ${guests} guest(s), ${days} night(s).`;
});
