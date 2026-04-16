const { test, expect } = require('@playwright/test');

// Use BASE_URL env var or playwright.config.js baseURL

test('csrf refresh endpoint returns token', async ({ request, baseURL }) => {
  const url = (process.env.BASE_URL || baseURL || 'http://localhost') + '/api/csrf-refresh';
  const res = await request.get(url);
  expect(res.ok()).toBeTruthy();
  const json = await res.json();
  expect(json.success).toBe(true);
  expect(json.csrf_token).toBeTruthy();
});

test('homepage includes csrf hidden input and window.CSRF_TOKEN', async ({ page }) => {
  const base = process.env.BASE_URL || 'http://localhost';
  await page.goto(base + '/');
  const hidden = await page.$('input[name="csrf_token"]');
  expect(hidden).not.toBeNull();
  const val = await hidden.getAttribute('value');
  expect(val).toBeTruthy();

  // Check that the window.CSRF_TOKEN global is set
  const token = await page.evaluate(() => window.CSRF_TOKEN);
  expect(token).toBeTruthy();
});
