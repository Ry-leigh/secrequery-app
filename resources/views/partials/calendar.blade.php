<div id="calendar-container">
    <h4>Calendar</h4>
    <input type="date" id="calendar" value="{{ \Carbon\Carbon::parse($date)->format('Y-m-d') }}">
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const calendar = document.getElementById('calendar');

        calendar.addEventListener('change', function () {
            const selectedDate = this.value;
            if (selectedDate) {
                window.location.href = `/secretary/instructor/attendance/${selectedDate}`;
            }
        });
    });
</script>


<style>
    #calendar-container {
        position: fixed;
        top: 100px;
        right: 30px;
        background: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 0 15px 15px 15px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        font-family: Arial, sans-serif;
        z-index: 1000;
    }

    #calendar-container label {
        display: block;
        font-weight: bold;
        margin-bottom: 8px;
    }

    #calendar {
        padding: 6px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }
</style>
