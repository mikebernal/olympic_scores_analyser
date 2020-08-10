// GLOBAL VARIABELS
var competitors = [];
/**
 * GET COUNTRIES
 * Invoked after DOMContentLoaded event.
 * Fetch list of countries from assets/countries.json. 
 * Converts the return object into an array for parsing.
 * Line 16 - 19 creates an option element and append it to the country select tag.
 * 
 */
(async function () {
  const countries = 'assets/countries.json'; 
  await fetch(countries)
    .then(function(response) { return response.json(); })
    .then(function (contents) {
      return Object.entries(contents).forEach(
        country => {
          var option       = document.createElement('OPTION');
          option.innerHTML = country[1].name;
          option.value     = country[1].name;
          document.querySelector('.country').appendChild(option);
        }
      );
    })
    .catch(function() { return console.log('Can’t access ' + countries + ' response. Blocked by browser?') })
})();

/**
 * GET EVENTS
 * Invoked after DOMContentLoaded event.
 * Fetch list of events from assets/events.json. 
 * Converts the return object into an array for parsing.
 * Line 41 - 44 creates an option element and append it to the event select tag.
 * 
 */
(async function () {
  const events = 'assets/events.json'; 
  await fetch(events)
    .then(function (response) { return response.json(); })
    .then(function (contents) {
      return Object.entries(contents).forEach(
        event => {
          var option       = document.createElement('OPTION');
          option.innerHTML = event[1].name;
          option.value     = event[1].name;
          document.querySelector('.event').appendChild(option);
        }
      );
    })
    .catch(function() { return console.log('Can’t access ' + events + ' response. Blocked by browser?'); })
})();


function updateTable() {
  return ((competitors.length > 0)
            ? (
                document.querySelector('.competitors-div').style.display = 'flex',
                document.querySelector('.competitors-div').style.flexDirection = 'column'
              )
            : document.querySelector('.competitors-div').style.display = 'none'
  );
}

function renderSubmitBtn() {
  return ((competitors.length > 1)
            ? document.querySelector('.submit').style.display = 'block'
            : document.querySelector('.submit').style.display = 'none'
  );
}

function addCompetitor(index) {
  // Create and append node to DOM
  var tr           = document.createElement('TR');
  var id           = document.createElement('TD');
  var name         = document.createElement('TD');
  var country      = document.createElement('TD');
  var event        = document.createElement('TD');
  var medal        = document.createElement('TD');
  var worldRecord  = document.createElement('TD');
  var edit         = document.createElement('TD');
  var remove       = document.createElement('TD');

  name.innerHTML        = document.forms[0].elements[4].value;
  country.innerHTML     = document.forms[0].elements[5].value;
  event.innerHTML       = document.forms[0].elements[6].value;
  medal.innerHTML       = document.forms[0].elements[7].value;
  worldRecord.innerHTML = document.forms[0].elements[8].value;
  id.innerHTML          = index;

  edit.innerHTML   = `<span class="pointer unselectable action-button" onclick="editCompetitor(` + index + `)">edit</span>`;
  remove.innerHTML = `<span class="pointer unselectable action-button" onclick="removeCompetitor(` + index + `)">delete</span>`;

  var lastRow = document.querySelector('.competitors').lastChild;
  lastRow.appendChild(tr);
  tr.appendChild(id);
  tr.appendChild(name);
  tr.appendChild(country);
  tr.appendChild(event);
  tr.appendChild(medal);
  tr.appendChild(worldRecord);
  tr.classList.add('row' + competitors.length);
  // edit delete
  tr.appendChild(edit);
  tr.appendChild(remove);

  competitors.push({
    'id':           competitors.length,
    'name':         document.forms[0].elements[4].value,
    'country':      document.forms[0].elements[5].value,
    'event':        document.forms[0].elements[6].value,
    'medal':        document.forms[0].elements[7].value,
    'world-record': document.forms[0].elements[8].value
  });

  // Reset input fields
  // document.forms[0].reset();
  document.forms[0].elements[4].value = '';
  document.forms[0].elements[5].value = '';
  document.forms[0].elements[6].value = '';
  document.forms[0].elements[7].value = '';
  document.forms[0].elements[8].value = '';

  updateTable();
  renderSubmitBtn();
  payloadUpdate()
}

// To do
function editCompetitor(index) {
  alert('the index is: ' + index);
  // update dom
}

// Remove competitor on the preview table
function removeCompetitor(index) {
  // splice element in competitors array
  competitors.forEach(function (competitor)  {
    (competitor.id === (index)) && competitors.splice(competitors.indexOf(competitor), 1)
  });

  // Update DOM
  var rowToRemove = document.querySelector('.row' + index.toString());
  rowToRemove.remove();
  updateTable();
  renderSubmitBtn();
  payloadUpdate()
}

function payloadUpdate() {
  var payloadRequest = document.querySelector('.competitor-list');
  payloadRequest.value = JSON.stringify(competitors);
  // console.log(payloadRequest.value);
}
