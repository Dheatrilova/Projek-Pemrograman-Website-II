document.addEventListener('DOMContentLoaded', () => {
	const selector = [
		'h1',
		'h2',
		'h3',
		'h4',
		'h5',
		'h6',
		'p',
		'a',
		'button',
		'img',
		'input',
		'span',
		'li',
		'section > div',
		'article',
		'figure',
	].join(', ');

	const targets = Array.from(document.querySelectorAll(selector)).filter((element) => {
		return !element.closest('svg') && !element.closest('path');
	});

	const seen = new Set();
	const uniqueTargets = targets.filter((element) => {
		if (seen.has(element)) {
			return false;
		}

		seen.add(element);
		return true;
	});

	const observer = new IntersectionObserver(
		(entries, observerInstance) => {
			entries.forEach((entry) => {
				if (!entry.isIntersecting) {
					return;
				}

				entry.target.classList.add('is-visible');
				observerInstance.unobserve(entry.target);
			});
		},
		{
			threshold: 0.12,
			rootMargin: '0px 0px -8% 0px',
		},
	);

	uniqueTargets.forEach((element, index) => {
		element.classList.add('motion-reveal');
		element.style.setProperty('--motion-delay', `${Math.min(index * 18, 220)}ms`);
		observer.observe(element);
	});
});
