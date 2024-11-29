!function(l) {
  "use strict";

  function e() {
    this.$body = l("body");
    this.$modal = new bootstrap.Modal(document.getElementById("event-modal"), { backdrop: "static" });
    this.$calendar = l("#calendar");
    this.$formEvent = l("#form-event");
    this.$btnNewEvent = l("#btn-new-event");
    this.$btnDeleteEvent = l("#btn-delete-event");
    this.$btnSaveEvent = l("#btn-save-event");
    this.$modalTitle = l("#modal-title");
    this.$calendarObj = null;
    this.$selectedEvent = null;
    this.$newEventData = null;
  }

  e.prototype.onEventClick = function(e) {
    this.$formEvent[0].reset();
    this.$formEvent.removeClass("was-validated");
    this.$newEventData = null;
    this.$btnDeleteEvent.show();
    this.$modalTitle.text("Edit Event");
    this.$modal.show();
    this.$selectedEvent = e.event;
    l("#event-title").val(this.$selectedEvent.title);
    l("#event-category").val(this.$selectedEvent.classNames[0]);
  };

  e.prototype.onSelect = function(e) {
    this.$formEvent[0].reset();
    this.$formEvent.removeClass("was-validated");
    this.$selectedEvent = null;
    this.$newEventData = e;
    this.$btnDeleteEvent.hide();
    this.$modalTitle.text("Add New Event");
    this.$modal.show();
    this.$calendarObj.unselect();
  };

  e.prototype.init = function() {
    var e = new Date(l.now());
    new FullCalendar.Draggable(document.getElementById("external-events"), {
      itemSelector: ".external-event",
      eventData: function(e) {
        return {
          title: e.innerText,
          className: l(e).data("class")
        };
      }
    });

    var t = [];

    this.$calendarObj = new FullCalendar.Calendar(this.$calendar[0], {
      slotDuration: "00:15:00",
      slotMinTime: "08:00:00",
      slotMaxTime: "19:00:00",
      themeSystem: "bootstrap",
      bootstrapFontAwesome: false,
      buttonText: {
        today: "Hoje",
        month: "Mês",
        week: "Semana",
        day: "Dia",
        list: "Lista",
        prev: "Anterior",
        next: "Próximo"
      },
      initialView: "dayGridMonth",
      handleWindowResize: true,
      height: l(window).height() - 200,
      headerToolbar: {
        left: "prev,next today",
        center: "title",
        right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth"
      },
      initialEvents: t,
      locale: "pt-br", // Definindo o idioma como português (Brasil)
      navLinks: true, // Habilitando a navegação nas datas do calendário
      eventLimit: true, // Habilitando a limitação de eventos por dia
      editable: true,
      droppable: true,
      selectable: true,
      dateClick: function(e) {
        this.onSelect(e);
      }.bind(this),
      eventClick: function(e) {
        this.onEventClick(e);
      }.bind(this)
    });

    this.$calendarObj.render();

    this.$btnNewEvent.on("click", function(e) {
      this.onSelect({ date: new Date(), allDay: true });
    }.bind(this));

    this.$formEvent.on("submit", function(e) {
      e.preventDefault();
      var t, n = this.$formEvent[0];

      if (n.checkValidity()) {
        if (this.$selectedEvent) {
          this.$selectedEvent.setProp("title", l("#event-title").val());
          this.$selectedEvent.setProp("classNames", [l("#event-category").val()]);
        } else {
          t = {
            title: l("#event-title").val(),
            start: this.$newEventData.date,
            allDay: this.$newEventData.allDay,
            className: l("#event-category").val()
          };
          this.$calendarObj.addEvent(t);
        }
        this.$modal.hide();
      } else {
        e.stopPropagation();
        n.classList.add("was-validated");
      }
    }.bind(this));

    l(this.$btnDeleteEvent).on("click", function(e) {
      if (this.$selectedEvent) {
        this.$selectedEvent.remove();
        this.$selectedEvent = null;
        this.$modal.hide();
      }
    }.bind(this));
  };

  l.CalendarApp = new e;
  l.CalendarApp.Constructor = e;
}(window.jQuery);

(function() {
  "use strict";
  window.jQuery.CalendarApp.init();
})();
