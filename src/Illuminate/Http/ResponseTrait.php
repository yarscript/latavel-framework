<?php namespace Illuminate\Http;

use Symfony\Component\HttpFoundation\Cookie;

trait ResponseTrait {

	/**
	 * Set a header on the Response.
	 *
	 * @param  string  $key
	 * @param  string  $value
	 * @param  bool    $replace
	 * @return $this
	 */
	public function header($key, $value, $replace = true)
	{
		$this->headers->set($key, $value, $replace);

		return $this;
	}

	/**
	 * Add a cookie to the response.
	 *
	 * @param  \Symfony\Component\HttpFoundation\Cookie  $cookie
	 * @return $this
	 */
	public function withCookie(Cookie $cookie)
	{
		return $this->withCookies([$cookie]);
	}

	/**
	 * Add multiple cookies to the response.
	 *
	 * @param  array  $cookies
	 * @return $this
	 */
	public function withCookies(array $cookies)
	{
		foreach ($cookies as $cookie)
		{
			$this->headers->setCookie($cookie);
		}

		return $this;
	}

}
