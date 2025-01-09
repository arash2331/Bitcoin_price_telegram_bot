# Telegram Bot for Bitcoin Price

This Telegram bot fetches the current Bitcoin price in USDT from the Nobitex API and displays it to the user upon the `/start` command. The bot is developed using PHP.

### Features
- Fetches the current Bitcoin price in USDT from Nobitex.
- Sends the price and current time (based on Iran's timezone) to the user.

### Prerequisites
1. PHP installed on your server.
2. A Telegram Bot Token from [BotFather](https://core.telegram.org/bots#botfather).

### Installation
1. Clone this repository to your server:
   ```bash
   git clone https://github.com/arash2331/Bitcoin_price_telegram_bot.git
   ```
2. Replace `TOKEN_BOT` with your actual Telegram Bot Token in the script.
3. Replace `CHAT_ID` with your admin chat ID.
4. Set up a webhook for your bot:
   ```bash
   curl -X POST "https://api.telegram.org/bot<TOKEN_BOT>/setWebhook?url=https://your-server.com/path-to-script"
   ```

### Usage
- Start the bot by sending `/start`.
- The bot responds with the current Bitcoin price and the local time in Iran.

### Sample Response
```
Bitcoin Price: 35000.00
Time: 2025-01-09 15:30:00
```

### Notes
- Make sure your server has internet access to fetch data from the Nobitex API.
- Adjust permissions to secure your script.

---


این ربات تلگرام قیمت بیت‌کوین به USDT را از وب‌سرویس Nobitex استخراج و در پاسخ به دستور `/start` به کاربر نمایش می‌دهد. این ربات با PHP توسعه یافته است.

### ویژگی‌ها
- استخراج قیمت فعلی بیت‌کوین از Nobitex.
- ارسال قیمت و ساعت فعلی (به وقت ایران) به کاربر.

### موردنیاز
1. نصب PHP بر روی سرور.
2. دریافت Token ربات تلگرام از [باتفادر](https://core.telegram.org/bots#botfather).

### نصب
1. این مخزن را به سرور خود کلون کنید:
   ```bash
   git clone https://github.com/arash2331/Bitcoin_price_telegram_bot.git
   ```
2. `TOKEN_BOT` را با توکن ربات خود عوض کنید.
3. `CHAT_ID` را با ID چنل یا چت مدیر عوض کنید.
4. وبهوک را تنظیم کنید:
   ```bash
   curl -X POST "https://api.telegram.org/bot<TOKEN_BOT>/setWebhook?url=https://your-server.com/path-to-script"
   ```

### نحوه استفاده
- با ارسال `/start` ربات را شروع کنید.
- ربات قیمت فعلی بیت‌کوین و ساعت محلی را پاسخ می‌دهد.

### مثال پاسخ
```
Bitcoin Price: 35000.00
Time: 2025-01-09 15:30:00
```

### نکات
- اطمینان حاصل کنید که سرور امکان دسترسی به اینترنت برای استخراج داد

