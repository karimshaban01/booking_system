sequenceDiagram
    actor Customer
    participant Homepage
    participant RouteSearch
    participant TicketSelection
    participant PassengerInfo
    participant SeatSelection
    participant Review
    participant Payment
    participant Confirmation

    Customer->>Homepage: Visit EasyBus website
    Homepage->>RouteSearch: Search for route
    Note over RouteSearch: Enter departure & destination
    Note over RouteSearch: Select date and time

    RouteSearch->>TicketSelection: Choose available bus
    Note over TicketSelection: Select ticket type
    Note over TicketSelection: - Standard ($45)
    Note over TicketSelection: - Premium ($55)
    Note over TicketSelection: - Business ($75)

    TicketSelection->>PassengerInfo: Enter passenger details
    Note over PassengerInfo: - Personal information
    Note over PassengerInfo: - Contact details
    Note over PassengerInfo: - ID documents

    PassengerInfo->>SeatSelection: Choose seats
    Note over SeatSelection: View bus layout
    Note over SeatSelection: Select available seats

    SeatSelection->>Review: Review booking
    Note over Review: Verify journey details
    Note over Review: Check passenger info
    Note over Review: Confirm seat selection
    Note over Review: Review total price

    Review->>Payment: Process payment
    Note over Payment: Choose payment method
    Note over Payment: Enter payment details
    Note over Payment: Secure transaction

    Payment->>Confirmation: Booking confirmed
    Note over Confirmation: Receive booking ID
    Note over Confirmation: Get e-ticket
    Note over Confirmation: Email confirmation